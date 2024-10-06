<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DomainPhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain_id',
        'picture_1',
        'picture_2',
        'picture_3',
    ];

    public function domain():BelongsTo
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }
}
