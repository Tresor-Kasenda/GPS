<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Person extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
        'username',
        'firstname',
        'gender',
        'marital_status',
        'birthdate',
        'birthplace',
        'phone_number',
        'address',
        'profile_picture',
        'identity_piece',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function birthday()
    {
        return $this->birthdate->format('Y-m-d');
    }

    /**
     * @return array<string, mixed|string|array>
     */
    protected function casts(): array
    {
        return [
            'gender' => Gender::class,
            'marital_status' => MaritalStatus::class,
            'birthdate' => 'date'
        ];
    }
}
