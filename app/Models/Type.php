<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name_type' , 'category', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App/Models/Category',  'id');
    }

    public function sites()
    {
        return $this->hasMany('App/Models/Site', 'type_id', 'id');
    }

}
