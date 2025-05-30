<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['description'];
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
