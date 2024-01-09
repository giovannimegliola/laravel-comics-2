<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //protected $guarded = []; // campi che NON voglio salvare

    protected $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'series', 'type']; //campi che voglio salvare
}
