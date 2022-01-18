@extends('layouts.admin.adminc')

@section('content')
<div class="container">
			<div class="row">
				<div class="col-md-12">
                <div class="panel-heading">Add a region</div>

                    <div class="panel-body">
                        <form action="{{ route('region.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="country"> country of the region </label>
                                <input type="text" name="country" id="country" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category"> category of the region</label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->name_category }}">{{$category->name_category}} </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="type"> type of the region </label>
                                <select name="type" id="type" class="form-control">
                                        @foreach($types as $type)
                                            <option value="{{ $type->name_type }}">{{$type->name_type}} </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="type_id"> type_id of the region</label>
                                    <select name="type_id" id="type_id" class="form-control">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{$type->id}}-{{$type->name_type}} </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="name_region"> Name of the region </label>
                                <input type="text" name="name_region" id="name_region" class="form-control">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection