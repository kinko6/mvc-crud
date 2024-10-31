<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $table = 'disciplines';
    protected $fillable = ['name', 'description'];
    public $timestamps = true;
}
