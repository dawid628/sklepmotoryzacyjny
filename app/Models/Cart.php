<?php

namespace App\Models;

use App\Models\Part;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public function part() {

        return $this->hasMany(Part::class,'id','part_id');
    }
}
