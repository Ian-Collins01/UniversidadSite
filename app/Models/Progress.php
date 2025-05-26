<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progress extends Model
{
    protected $fillable = ['advance', 'final_score', 'registration_id'];
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
