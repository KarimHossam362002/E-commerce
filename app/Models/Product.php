<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'description' , 'image', 'price' , 'discount_price' , 'category_id'];

    // one product belongs to one category
    public function category(){
        
        return $this->belongsTo(Category::class);
    }
    public function productSizes(){
        return $this->hasMany(ProductSize::class);
    }
    public function productColors(){
        return $this->hasMany(ProductColor::class);
    }
}
