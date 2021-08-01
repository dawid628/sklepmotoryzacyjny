<?php

namespace App\Models;

use App\Models\Part;
use App\Http\Requests\ListRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingList extends Model
{
    use HasFactory;
    protected $table = 'lists';

    protected $fillable = [
        'name','user_id',
    ];

    public function parts(){

        return $this->belongsToMany(Part::class);
    }
}
