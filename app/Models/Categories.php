<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use ModelTrait;

    protected $table = "categories";

    protected $fillable = ['name', 'description', 'status',];
}