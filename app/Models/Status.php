<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //Relacion uno a uno 
    public function lead()
    {
        return $this->hasOne(Lead::class);
    }
}
