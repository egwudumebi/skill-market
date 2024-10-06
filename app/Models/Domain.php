<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Domain extends Model
{
    use HasFactory;

    protected $table = 'domains';
    protected $fillable = [
        'name',
        'description',
        'sub_skills',
    ];

    public function photo():HasOne
    {
        return $this->hasOne(DomainPhoto::class);
    }


    // Cast the 'sub_skills' attribute to an array
    protected $casts = [
        'sub_skills' => 'array',
    ];
}
