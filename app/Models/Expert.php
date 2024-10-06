<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Expert extends Authenticatable
{
    use HasFactory;

    protected $table = 'experts';
    protected $fillable = [
        'fullname',
        'username',
        'profile',
        'email',
        'password',
        'bio',
        'domain_id',
        'sub_skills',
        'company',
        'job_title',
        'country',
        'address',
        'phone',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
        'whatsapp',
        'status',
    ];

    protected $casts = [
        'sub_skills' => 'array', // Cast the JSON field to an array
    ];

    // public function domain():BelongsTo
    // {
    //     return $this->belongsTo(Domain::class, 'expert_id');
    // }
}
