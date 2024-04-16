<?php

namespace App\Models;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
