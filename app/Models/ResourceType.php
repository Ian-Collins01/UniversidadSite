<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResourceType extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['description'];

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}
