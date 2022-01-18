<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Category;
use Session;

class TypesController extends Controller
{

    public function index($id)
    {
        $types = Type::with('types')->where('category_id', $id)->get();
        return view('tourist.type.type', compact('types'));
    }

    public function show($id)
    {
        $type = Type::where('id', $id)->first();
        return view('tourist.type.type_show', ['type' => $type]);
    }
}
