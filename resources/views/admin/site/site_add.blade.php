@extends('layouts.admin.adminc')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
        <span class="contact100-form-title">Add a site</span>
                    <form action="{{ route('site.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="category"> category of the site</label>
                                <select name="category" id="category" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->name_category }}">{{$category->name_category}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="type"> type of the site </label>
                            <select name="type" id="type" class="form-control">
                                    @foreach($types as $type)
                                        <option value="{{ $type->name_type }}">{{$type->name_type}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="region"> region of the site </label>
                            <select name="region" id="region" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{ $region->name_region }}">{{$region->country}}-{{$region->category}}-{{$region->type}}-{{$region->name_region}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="region_id"> region_id of the site</label>
                                <select name="region_id" id="region_id" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{$region->id}}-{{$region->country}}-{{$region->category}}-{{$region->type}}-{{$region->name_region}}  </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="name_site"> Name of the site </label>
                            <input type="text" name="name_site" id="name_site" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="city"> City of the site </label>
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description"> Description of the site </label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image" > image of the site </label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="google_map"> google_map of the site </label>
                            <input type="text" name="google_map" id="google_map" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">save</button>
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