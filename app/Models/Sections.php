<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sections extends Model
{
    protected $fillable = [
        'section_name',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'section_id');
    }
}
