<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Category;
use Session;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.type.type')->With('types', Type::all());
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
        //get type list
        $c = Category::orderBy('created_at', 'desc')->get();
        return view('admin.type.type_add', [
            'types' => Type::all(),
            'categories' => Category::all(),
            ])->with('category', $c);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->name_type == null) {
            Session::flash('error', 'The field name_type cannot be empty.');
            return redirect()->back();
        }
        if($request->category == null) {
            Session::flash('error', 'The field category cannot be empty.');
            return redirect()->back();
        }
        if($request->category_id == 0) {
            Session::flash('error', 'The field category_id cannot be empty.');
            return redirect()->back();
        }
        
            $type=new Type;
        $type->name_type = $request->name_type;
        $type->category = $request->category;
        $type->category_id = $request->category_id;
        $type->save();
        Session::flash('success', 'the type has been successfully added.');

        return redirect( route('type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::where('id', $id)->first();
        return view('admin.type.type_show', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::where('id', $id)->first();
        return view('admin.type.type_edit', ['type' => $type, 'categories' => Category::all()]);
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
        if($request->name_type == null) {
            Session::flash('error', 'The field name_type cannot be empty.');
            return redirect()->back();
        }
        if($request->category == null) {
            Session::flash('error', 'The field category cannot be empty.');
            return redirect()->back();
        }
        if($request->category_id == 0) {
            Session::flash('error', 'The field category_id cannot be empty.');
            return redirect()->back();
        }

            $type = Type::find($id);
        $type->name_type = $request->name_type;
        $type->category = $request->category;
        $type->category_id = $request->category_id;
        
        $type->update();
        Session::flash('success', 'the type has been successfully added.');

        return redirect( route('type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Type::find($id)->delete();
        Session::flash('success', 'type deleted.');

        return redirect( route('type'));
    }
}
