<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    const AVAILABLE=1;
    const RESERVED=2;
    const SOLD_OUT=3;
}
