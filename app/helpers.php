<?php 

use App\CatRecord;
use App\DogRecord;

function swapSpecies($pet) {
    // Do some converting if applicable
    if ($pet->species == 'Cat') {
        $pet->species = 'Dog';
        DogRecord::create(['pet_id' => $pet->id]);
    }

    $pet->species = 'Cat';
    CatRecord::create(['pet_id' => $pet->id]);

    $pet->save();
}