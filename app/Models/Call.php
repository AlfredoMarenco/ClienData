<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'eventable');
    }
}
