<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class CatRecord extends Model
{
    protected $fillable = [
        'pet_id',
        'fvrcp_vaccine',
        'fvrcp_vendor',
        'felv_vaccine',
        'felv_vendor',
        'fip_vaccine',
        'fip_vendor',
        'leukemia_test',
        'leukemia_test_results',
        
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
