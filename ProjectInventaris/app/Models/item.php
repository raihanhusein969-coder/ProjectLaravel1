<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'code',
        'item_name', 
        'category',
        'stock',
        'condition',
        'room_location'
        ];
}
