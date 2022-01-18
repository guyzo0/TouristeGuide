<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['name_category'];


    public function types()
    {
        return $this->hasMany('App/Models/Type', 'category_id', 'id');
    }
}
