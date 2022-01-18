<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Region;
use App\Models\Type;
use App\Models\Category;
use Session;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site.site')->With('sites', Site::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function add()
    {
        //get site list
        $c = Type::orderBy('created_at', 'desc')->get();
        return view('admin.site.site_add',  [
            'sites' => Site::all(),
            'types' => Type::all(),
            'regions' => Region::all(),
            'categories' => Category::all(),
            ])->with('type', $c);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->name_site == null) {
            Session::flash('error', 'The field name_site cannot be empty.');
            return redirect()->back();
        }
        if($request->category == null) {
            Session::flash('error', 'The field category cannot be empty.');
            return redirect()->back();
        }
        if($request->type == null) {
            Session::flash('error', 'The field type cannot be empty.');
            return redirect()->back();
        }
        if($request->region_id == 0) {
            Session::flash('error', 'The field region_id cannot be empty.');
            return redirect()->back();
        }
        if($request->region == null) {
            Session::flash('error', 'The field region cannot be empty.');
            return redirect()->back();
        }
        if($request->city == null) {
            Session::flash('error', 'The field city cannot be empty.');
            return redirect()->back();
        }
        if($request->description == null) {
            Session::flash('error', 'The field description cannot be empty.');
            return redirect()->back();
        }
        if($request->image == null) {
            Session::flash('error', 'The field image cannot be empty.');
            return redirect()->back();
        }
        if($request->google_map == null) {
            Session::flash('error', 'The field google_map cannot be empty.');
            return redirect()->back();
        }
            $site=new Site;
        $site->name_site = $request->name_site;
        $site->category = $request->category;
        $site->type = $request->type;
        $site->region_id = $request->region_id;
        $site->region = $request->region;
        $site->city = $request->city;
        $site->description = $request->description;
        $site->image = $request->image;
        $site->google_map = $request->google_map;
        $site->save();
        Session::flash('success', 'the site has been successfully added.');

        return redirect( route('site'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = Site::where('id', $id)->first();
        return view('admin.site.site_show', ['site' => $site,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = Site::where('id', $id)->first();
        return view('admin.site.site_edit', ['site' => $site, 
        'types' => Type::all(),'regions' => Region::all(),
        'categories' => Category::all(),]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->name_site == null) {
            Session::flash('error', 'The field name_site cannot be empty.');
            return redirect()->back();
        }
        if($request->category == null) {
            Session::flash('error', 'The field category cannot be empty.');
            return redirect()->back();
        }
        if($request->type == null) {
            Session::flash('error', 'The field type cannot be empty.');
            return redirect()->back();
        }
        if($request->region_id == 0) {
            Session::flash('error', 'The field region_id cannot be empty.');
            return redirect()->back();
        }
        if($request->region == null) {
            Session::flash('error', 'The field region cannot be empty.');
            return redirect()->back();
        }
        if($request->city == null) {
            Session::flash('error', 'The field city cannot be empty.');
            return redirect()->back();
        }
        if($request->description == null) {
            Session::flash('error', 'The field description cannot be empty.');
            return redirect()->back();
        }
        if($request->image == null) {
            Session::flash('error', 'The field image cannot be empty.');
            return redirect()->back();
        }
        if($request->google_map == null) {
            Session::flash('error', 'The field google_map cannot be empty.');
            return redirect()->back();
        }

            $site = Site::find($id);
            $site->name_site = $request->name_site;
            $site->category = $request->category;
            $site->type = $request->type;
            $site->region_id = $request->region_id;
            $site->region = $request->region;
            $site->city = $request->city;
            $site->description = $request->description;
            $site->image = $request->image;
            $site->google_map = $request->google_map;
        $site->update();
        Session::flash('success', 'the site has been successfully added.');

        return redirect( route('site'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Site::find($id)->delete();
        Session::flash('success', 'site deleted.');

        return redirect( route('site'));
    }
}
