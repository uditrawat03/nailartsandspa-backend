<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = Str::slug($value))->exists()) {
            $slug = $this->incrementSlug($slug);
        }
    
        $this->attributes['slug'] = $slug;
    }


    public function incrementSlug($slug)
    {
        $original = $slug;
    
        $count = 2;
    
        while (static::whereSlug($slug)->exists()) {
            $slug = "{$original}-" . $count++;
        }
    
        return $slug;
    }
}
