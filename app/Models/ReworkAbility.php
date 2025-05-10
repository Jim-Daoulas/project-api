<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ReworkAbility extends Model
{
    use HasFactory;

    protected $fillable = [
        'rework_id',
        'name',
        'key',
        'description',
        'image_url',
        'details',
    ];

    protected $casts = [
        'details' => 'array',
    ];

    public function rework(): BelongsTo
    {
        return $this->belongsTo(Rework::class);
    }
}
