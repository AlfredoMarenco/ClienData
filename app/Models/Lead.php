<?php

namespace App\Models;

use App\Collections\TimeLineCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a uno inversa
    public function status(){
        return $this->belongsTo(Status::class);
    }

    //Relaciones uno a muchos
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function calls()
    {
        return $this->hasMany(Call::class);
    }

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function fullName()
    {
        return $this->name . ' ' . $this->last_name;
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'eventable');
    }

}
