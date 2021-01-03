<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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
         * @return boolean true si le user est dans le meme groupe que le commentaire 
         */
        static::creating(function ($comment) {
            return !is_null($comment->photo->group->users->find($comment->user_id));
        });
    }

    
      /**
     * Renvoi la photo associée au commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function replies()
    {
        return $this->hasMany(Comment::class);
    }

      /**
     * Renvoi l'utilisateur qui a écrit le commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }



       /**
     * Renvoi les réponses d'un commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function replyTo()
    {
        return $this->belongsTo(Comment::Class, 'comment_id','id');
    }

    
}
