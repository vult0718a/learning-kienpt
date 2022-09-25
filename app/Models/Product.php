<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_product',
        'detail',
        'price',
        'category_id',
        'stock'
    ];
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
