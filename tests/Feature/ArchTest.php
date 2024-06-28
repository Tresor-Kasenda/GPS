<?php

declare(strict_types=1);

test('Livewire')
    ->expect('App\Livewire')
    ->toBeClasses()
    ->classes->toBeFinal()
    ->not->toHaveSuffix('Component');


test('Component')
    ->expect('App\Livewire')
    ->toNotHaveSuffix('Component');
