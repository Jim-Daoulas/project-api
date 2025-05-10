<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rework extends Model
{
    use HasFactory;

    protected $fillable = [
        'champion_id',
        'user_id',
        'title',
        'summary',
        'stats',
    ];

    protected $casts = [
        'stats' => 'array',
    ];

    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function abilities(): HasMany
    {
        return $this->hasMany(ReworkAbility::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
