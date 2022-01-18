@extends('layouts.admin.adminu')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
        <span class="contact100-form-title">Edit the user {{ $user->id}}</span>
                    <form action="{{ route('user.update', ['id'=>$user->id])}}" method="post">
                    @csrf
                        
                    <div class="form-group">
                            <label for="name"> User name </label>
                            <input type="text" name="name" id="name" value="{{ $user->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email of the user </label>
                            <input type="text" name="email" id="email" value="{{ $user->email}}" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="contact"> Contact of the user </label>
                            <input type="text" name="contact" id="contact" value="{{ $user->contact}}" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="address"> Address of the user </label>
                            <input type="text" name="address" id="address" value="{{ $user->address}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">User password</label>
                            <input type="text" name="password" id="password" value="{{ $user->password}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">update</button>
                        </center>
                        </div>
                    </form>
        <div class="col-md-2">
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Erreur! </strong> {{Session::get('error')}}
                </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>  
</div>
@endsection