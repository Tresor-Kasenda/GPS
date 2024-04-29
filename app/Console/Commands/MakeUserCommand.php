<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Console\Command;
use Illuminate\Validation\Rules\Password;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

final class MakeUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user';

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
            'Enter the name of user',
            required: true,
            validate: ['name' => 'required|max:255']
        );

        $email = text(
            'E-mail',
            'Enter the email of user',
            required: true,
            validate: ['name' => 'required|email|unique:users']
        );

        $password = password(
            'Password',
            'Enter the password of user',
            required: true,
            validate: ['required', 'min:8', Password::defaults()]
        );

        $user = User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        event(new Registered($user));

        $this->components->info("User {$user->name} has been created");
    }
}
