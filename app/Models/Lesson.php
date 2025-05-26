<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    protected $fillable = ['title', 'description'];
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_lessons');
    }
    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}
