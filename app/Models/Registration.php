<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registration extends Model
{
    protected $fillable = ['registration_date', 'status_id', 'applicant_id', 'course_id'];

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function progress(): HasOne
    {
        return $this->hasOne(Progress::class);
    }
}
