<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ability extends Model
{
    use HasFactory;

    protected $fillable = [
        'champion_id',
        'name',
        'key',
        'description',
        'image_url',
        'details',
    ];

    protected $casts = [
        'details' => 'array',
    ];

    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }
}
