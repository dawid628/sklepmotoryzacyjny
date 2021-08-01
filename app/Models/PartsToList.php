<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsToList extends Model
{
    use HasFactory;
    protected $table = 'part_shopping_list';
    
    protected $fillable = [
        'name', 'shopping_list_id','part_id',
    ];
}
