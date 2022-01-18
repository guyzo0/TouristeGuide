<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Type;
use App\Models\Category;
use Session;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.region.region')->With('regions', Region::all());
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
        //get region list
        $c = Type::orderBy('created_at', 'desc')->get();
        return view('admin.region.region_add',  [
            'regions' => Region::all(),
            'types' => Type::all(),
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
        
        if($request->name_region == null) {
            Session::flash('error', 'The field name_region cannot be empty.');
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
        if($request->country == null) {
            Session::flash('error', 'The field country cannot be empty.');
            return redirect()->back();
        }
        if($request->type_id == 0) {
            Session::flash('error', 'The field type_id cannot be empty.');
            return redirect()->back();
        }
            $region=new Region;
        $region->name_region = $request->name_region;
        $region->category = $request->category;
        $region->type = $request->type;
        $region->type_id = $request->type_id;
        $region->country = $request->country;;
        $region->save();
        Session::flash('success', 'the region has been successfully added.');

        return redirect( route('region'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::where('id', $id)->first();
        return view('admin.region.region_show', ['region' => $region,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = Region::where('id', $id)->first();
        return view('admin.region.region_edit', ['region' => $region, 
        'types' => Type::all(),
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
        if($request->name_region == null) {
            Session::flash('error', 'The field name_region cannot be empty.');
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
        if($request->type_id == 0) {
            Session::flash('error', 'The field type_id cannot be empty.');
            return redirect()->back();
        }
        if($request->country == null) {
            Session::flash('error', 'The field country cannot be empty.');
            return redirect()->back();
        }

        $region = Region::find($id);
        $region->name_region = $request->name_region;
        $region->category = $request->category;
        $region->type = $request->type;
        $region->type_id = $request->type_id;
        $region->country = $request->country;
        $region->update();
        Session::flash('success', 'the region has been successfully added.');

        return redirect( route('region'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Region::find($id)->delete();
        Session::flash('success', 'region deleted.');

        return redirect( route('region'));
    }
}
