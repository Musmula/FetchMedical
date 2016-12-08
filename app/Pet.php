<?php

namespace App;

use App\User;
use App\PetQueue;
use App\CatRecord;
use App\DogRecord;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $status;

    public function __construct() {
        
        $this->status = $this->processed ? 'Up to date' : 'Queued for processing';
    }
    protected $fillable = [
        'user_id',
        'picture',
        'name',
        'species',
        'breed',
        'color',
        'gender',
        'processed',
        'notes',

    ];

    public function user() {
        return $this->BelongsTo(User::class);
    }

    public function queue() {
        return $this->hasMany(PetQueue::class);
    }

    public function medicalRecords() {

        if ($this->species == 'Cat') {
            return $this->hasOne(CatRecord::class);
        }

        return $this->hasOne(DogRecord::class);
    }

    public function setProcessedAttribute($value) {
        $this->attributes['processed'] = (boolean) $value;
    }
}
