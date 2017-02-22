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
