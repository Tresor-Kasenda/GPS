<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Console\Command;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\Console\Attribute\AsCommand;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

#[AsCommand('app:make-user')]
final class MakeUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user
                        {--name= : Name of the user}
                        {--email= : Email of the user}
                        {--password= : The password for the user (min. 8 characters)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command helps to make administrator';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = text(
            'Name',
            "Saisir le nom",
            required: true,
            validate: ['name' => 'required|max:255']
        );

        $email = text(
            'E-mail',
            "Saisir l'email",
            required: true,
            validate: ['name' => 'required|email|unique:users']
        );

        $password = password(
            'Password',
            "Saisir le mot de passe",
            required: true,
            validate: ['required', 'min:8', Password::defaults()]
        );

        $user = User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'email_verified_at' => now()
        ]);

        event(new Registered($user));

        $loginUrl = route('login');

        $this->components->info('Success! Your account has been created ' . $user?->email . ' with successfully' . " may now log in at {$loginUrl}");
    }
}
