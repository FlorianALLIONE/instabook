<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoUser extends Pivot
{
    use HasFactory;
    
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted() {

        /**
         * 
         * @return boolean true si le user est dans le meme groupe que la photo 
         */
        static::creating(function ($photo_user) {
            return !is_null($photo_user->photo->group->users->find($photo_user->user_id));
        });
    }


    /**
     * Renvoi l'utilisateur associé au groupe
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function user()
    {
        return $this->BelongsTo(User::class);
    }


     /**
     * Renvoi le groupe associé à l'utilisateur
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function photo()
    {
        return $this->BelongsTo(Photo::class);
    }
}
