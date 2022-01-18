<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Region;
use App\Models\Type;
use App\Models\Site;
use Session;

class CategoriesController extends Controller
{
    
    public function index(Request $request)
    {
        return view('tourist.category.category')->With('categories', category::all());
    }

    public function types(Request $request, $id)
    {
        $types = Type::orderBy('id', 'ASC')->where('category_id', $id)->get();

        return view('tourist.type.type', ['types'=>$types]);
    }

    public function regions(Request $request, $id)
    {
        $regions = Region::orderBy('id', 'ASC')->where('type_id', $id)->get();

        return view('tourist.region.region', ['regions'=> $regions]);
    }

    public function sites(Request $request, $id)
    {
        $sites = Site::orderBy('id', 'DESC')->where('region_id', $id)->get();

        return view('tourist.site.site', compact('sites'));
    }

    public function show($id)
    {
        $site = Site::where('id', $id)->first();
        return view('tourist.site.site_show', ['site' => $site,]);
    }

    

}
