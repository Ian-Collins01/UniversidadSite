<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'company_id'];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
