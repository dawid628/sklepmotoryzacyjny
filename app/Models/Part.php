<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function carts(){

        return $this->belongsToMany(User::class, 'carts');
    }

    public function lists(){

        return $this->belongsToMany(ShoppingList::class); //'part_shopping_list', 'shopping_list_id', 'part_id');
    }
}
