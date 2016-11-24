<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class CatRecord extends Model
{
    protected $fillable = [
        'pet_id',
        'notes',
        'weight',
        'weight_date',
        'microchip_co',
        'microchip_id',
        'microchip_date',
        'rabies_co',
        'rabies_date',
        'fvrcp_manufacturer',
        'fvrcp_vaccine',
        'fvrcp_booster',
        'fvrcp_date',
        'other_vaccine',
        'deworming_medicine',
        'deworming_1',
        'deworming_2',
        'deworming_3',
        'flea_and_tick_medicine',
        'flea_and_tick_treatement',
        'flea_and_tick_notes',
        'heartworm_medicine',
        'heartworm_treatement',
        'heartworm_notes',
        'spay_neuter_clinic',
        'spay_neuter_date',
        'diet',
        'conditions',
        'dental_notes',
        'history',
        'shelter_release_date',
        'foster',
        'adopter',
        'adopted',

    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
