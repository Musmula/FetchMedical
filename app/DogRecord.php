<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class DogRecord extends Model
{
    protected $fillable = [
        'pet_id',
        'dhpp_vaccine',
        'dhpp_vendor',
        'bordetella_vaccine',
        'bordetella_vendor',
        'corona_vaccine',
        'corona_vendor',
        'parvo_vaccine',
        'parvo_vendor',
        'heartworm_test',
        'heartworm_test_results'
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
