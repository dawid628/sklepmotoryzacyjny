<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    public function bodyworks(){

        return $this->belongsToMany(Bodywork::class);
    }

    public function categories(){

        return $this->belongsToMany(Category::class);
    }

    public function cars(){

        return $this->belongsToMany(Car::class);
    }

    public function engines(){

        return $this->belongsToMany(Engine::class);
    }
}
