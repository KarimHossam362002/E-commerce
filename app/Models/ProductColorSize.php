<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['color_id','size_id','quantity','price_two','discount_two','is_stock'
, 'status'
];

public function productColor(){
    return $this->belongsTo(ProductColor::class);
}
public function productSize(){
    return $this->belongsTo(ProductSize::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }
}
