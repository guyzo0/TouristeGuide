<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.category')->With('categories', Category::all());
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
        //get category list
        return view('admin.category.category_add', [ 'categories' => Category::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->name_category == null) {
            Session::flash('error', 'The field name_category cannot be empty.');
            return redirect()->back();
        }
            $category=new Category;
        $category->name_category = $request->name_category;
        $category->save();
        Session::flash('success', 'the category has been successfully added.');

        return redirect( route('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.category_show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.category_edit', ['category' => $category]);
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
        if($request->name_category == null) {
            Session::flash('error', 'The field name_category cannot be empty.');
            return redirect()->back();
        }

            $category = Category::find($id);
        $category->name_category = $request->name_category;
        $category->update();
        Session::flash('success', 'the category has been successfully added.');

        return redirect( route('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        Session::flash('success', 'category deleted.');

        return redirect( route('category'));
    }
}
