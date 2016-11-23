<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class PetQueue extends Model
{
    protected $fillable = [
        'pet_id',
        'name',
        'type',
        'message',
        'resolved',

    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
