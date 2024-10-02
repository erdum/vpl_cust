<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NumberCallLog extends Model
{
    use HasFactory;

    public function number(): BelongsTo
    {
        return $this->belongsTo(Number::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}