<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Region;
use App\Models\Type;
use App\Models\Category;
use Session;

class SitesController extends Controller
{
    public function index()
    {
        return view('tourist.site.site')->With('sites', Site::all());
    }

    public function show($id)
    {
        $type = Type::where('id', $id)->get();
        return view('tourist.type.type_show', ['type' => $type]);
    }
    
}
