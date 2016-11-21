<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'species',
        'breed',
        'gender',

    ];

    public function user() {
        return $this->BelongsTo(User::class);
    }
}
