<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'category_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
    public function lessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'course_lessons');
    }
    public function assessments(): HasMany
    {
        return $this->hasMany(Assessment::class);
    }
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
