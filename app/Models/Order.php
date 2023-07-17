<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
    use HasFactory;

    protected $fillable = ['productname', 'price', 'quantity', 'image_url', 'total'];
}