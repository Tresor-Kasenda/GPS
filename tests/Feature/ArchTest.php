<?php

test('Livewire')
    ->expect('App\Livewire')
    ->toBeClasses()
    ->classes->toBeFinal()
    ->not->toHaveSuffix('Component');


test('Component')
    ->expect('App\Livewire')
    ->toNotHaveSuffix('Component');