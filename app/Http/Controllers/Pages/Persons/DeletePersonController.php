<?php

namespace App\Http\Controllers\Pages\Persons;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeletePersonController extends Controller
{
    public function __invoke(Person $person)
    {
        $person->delete();

        // remove image from storage
        Storage::delete($person->image);

        return redirect()->route('persons.lists-physic-person');
    }
}
