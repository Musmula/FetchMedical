<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class DogRecord extends Model
{
    protected $fillable = [
        'pet_id',
        'notes'
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
