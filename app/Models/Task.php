<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
