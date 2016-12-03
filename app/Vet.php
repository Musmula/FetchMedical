<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'address',
        'city',
        'zip',
        'fax',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute($value) {
        if ($value == "") {
            return "No name set";
        }

        return $value;
    }

    public function getPhoneAttribute($value) {
        if ($value == "") {
            return "No phone number set";
        }

        return $value;
    }
}
