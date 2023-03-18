<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function transporte(){

        return $this ->hasMany('App\Models\Transporte');
    }

    use HasFactory;
}
