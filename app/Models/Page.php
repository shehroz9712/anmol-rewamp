<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded;

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
