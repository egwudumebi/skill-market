<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Recruiter extends Authenticatable
{
    use HasFactory;

    protected $table = 'recruiters';

    protected $fillable = [
        'fullname',
        'profile',
        'username',
        'email',
        'password',
        'phone',
    ];
}
