@extends('layouts.admin.adminc')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12"> 
        <span class="contact100-form-title">Edit the type {{ $type->id}}</span>
                    <form action="{{ route('type.update', ['id'=>$type->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="category"> category of the type </label>
                            <select name="category" id="category" class="form-control" value="{{ $type->category }}">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->name_category }}">{{$category->name_category}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id"> category </label>
                                <select name="category_id" id="category_id" class="form-control" value="{{ $type->category_id }}">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{$category->id}}-{{$category->name_category}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="name_type"> Name of the type </label>
                            <input type="text" name="name_type" id="name_type" value="{{ $type->name_type}}" class="form-control">
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