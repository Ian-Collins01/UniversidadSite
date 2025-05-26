<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
