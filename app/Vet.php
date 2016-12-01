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
}
