<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skin extends Model
{
    use HasFactory;

    protected $fillable = [
        'champion_id',
        'name',
        'image_url',
        'description',
    ];

    public function champion(): BelongsTo
    {
        return $this->belongsTo(Champion::class);
    }
}
