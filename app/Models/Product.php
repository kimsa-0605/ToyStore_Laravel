<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name','price','image_link','category_id','description','quantity','created_at','updated_at'
    ];
    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
