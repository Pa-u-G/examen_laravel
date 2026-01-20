<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    protected $fillable = [
        'name',
        'password',
    ];
    protected $table = "user_admin";

}
