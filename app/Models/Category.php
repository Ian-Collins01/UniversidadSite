<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['description'];
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
