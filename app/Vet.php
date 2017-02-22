<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'zip',
        'fax',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getPhoneAttribute($value) {
        if ($value == null) {
            return null;
        }
        return "(" . substr($value, 0, 3) . ") " . substr($value, 3, 3) . "-" . substr($value, 6, 4);
    }
}
