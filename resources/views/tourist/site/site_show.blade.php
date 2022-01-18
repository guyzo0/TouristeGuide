@extends('layouts.user.site')

@section('content')

<section class="ftco-section">
		<div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-info">
                            <h1 class="row justify-content-center">Displaying of the {{ $site->category }} detail</h1>
                            <thead class="table-dark">
                                
                                <th>category</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Region</th>
                                <th>City</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>google_map</th>
                            </thead>
                            <tbody>
                                <tr>
                                 
                                    <th>{{ $site->category }}</th>
                                    <th>{{ $site->name_site }}</th>
                                    <th>{{ $site->type }}</th>
                                    <th>{{ $site->region }}</th>
                                    <th>{{ $site->city }}</th>
                                    <th>{{ $site->description }}</th>
                                    <th><img src="{{ asset($site->image) }}" class="img-fluid" alt=""></th>
                                    <th><a href="{{$site->google_map}}">google_map</a></th>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                                    
        <div class="col-md-2">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> success! </strong> {{Session::get('success')}}
            </div>  
            @endif
        </div>
    </div>
</section>
    @endsection