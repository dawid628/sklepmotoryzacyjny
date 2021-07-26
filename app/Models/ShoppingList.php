<?php

namespace App\Models;

use App\Models\Part;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingList extends Model
{
    use HasFactory;
    protected $table = 'lists';

    public function parts(){

        return $this->belongsToMany(Part::class);
    }
}
