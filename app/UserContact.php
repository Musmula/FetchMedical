<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $fillable = [
        'user_id',
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
