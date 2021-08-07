<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    //Relacion uno a muchos inversa
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }


    //Relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'eventable');
    }
}
