<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ['name_site', 'category' , 'type' , 'region' , 'city' , 'description',  'image' , 'google_map', 'region_id'];

    public function region()
    {
        return $this->belongsTo('App/Models/Region');
    }

}
