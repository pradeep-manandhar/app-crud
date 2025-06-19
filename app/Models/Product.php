<?php

namespace App\Models;
use App\Http\Controllers\ProductController;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'name',
        'qty',
        'price',
        'description',
    ];
}
