<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'image_link',
        'category_id',
        'description',
        'quantity',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}

