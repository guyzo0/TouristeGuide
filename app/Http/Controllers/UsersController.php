<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.user')->With('users', User::all());
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

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.user_show', ['user' => $user,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.user_edit', ['user' => $user]);
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
        if($request->name == null) {
            Session::flash('error', 'The field name cannot be empty.');
            return redirect()->back();
        }
        if($request->email == null) {
            Session::flash('error', 'The field email cannot be empty.');
            return redirect()->back();
        }
        if($request->contact == null) {
            Session::flash('error', 'The field contact cannot be empty.');
            return redirect()->back();
        }
        if($request->address == null) {
            Session::flash('error', 'The field address cannot be empty.');
            return redirect()->back();
        }
        if($request->password == null) {
            Session::flash('error', 'The field password cannot be empty.');
            return redirect()->back();
        }
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->update();
        Session::flash('success', 'the user has been successfully updated.');

        return redirect( route('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();
        Session::flash('success', 'user deleted.');

        return redirect( route('user'));
    }
}
