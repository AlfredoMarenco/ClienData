<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


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
}
