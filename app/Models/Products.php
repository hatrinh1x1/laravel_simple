<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    protected $fillable = ['name', 'description', 'status', 'priority'];

    public function categories()
    {
        return $this->belongsToMany(
            Categories::class,
            'product_category',
            'product_id',
            'category_id'
        )->withTimestamps();
    }
}
