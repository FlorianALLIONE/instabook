<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoTag extends Pivot
{
    use HasFactory;
    
    /**
     * Renvoi l'utilisateur associé au groupe
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tags()
    {
        return $this->hasMany(Photo::class);
    }


     /**
     * Renvoi le groupe associé à l'utilisateur
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
