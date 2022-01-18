<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name_region' , 'country', 'category', 'type', 'type_id'];

    public function type()
    {
        return $this->belongsTo('App/Models/Type',  'id');
    }

    public function sites()
    {
        return $this->hasMany('App/Models/Site', 'region_id', 'id');
    }
}
