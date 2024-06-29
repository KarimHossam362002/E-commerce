<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['size', 'product_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function productColorSizes(){
        return $this->hasMany(ProductColorSize::class);
    }
   
}

