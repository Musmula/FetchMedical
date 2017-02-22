<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class AgnosticInfo extends Model
{
    protected $fillable = [
        'pet_id',
        'weight',
        'weight_date',
        'microchip_id',
        'microchip_co',
        'insurrance_policy',
        'insurrance_co',
        'conditions',
        'rabies_date',
        'rabies_co',
        'rabies_vaccine',
        'rabies_vendor',
        'fecal_test',
        'fecal_test_results',
        'dental_date',
        'dental_notes',
        'other_vaccine',
        'other_vaccine_date',
        'other_vaccine_notes',
        'vet_certificates_filename',
        'notes',
        'notes_filename'
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
