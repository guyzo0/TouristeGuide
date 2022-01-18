@extends('layouts.admin.adminc')

@section('content')

<section class="ftco-section">
		<div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-info">
                            <h1 class="row justify-content-center">Displaying of the {{ $region->category }} region details</h1>
                            <thead class="table-dark">
                                <th>Index</th>
                                <th>country</th>
                                <th>category</th>
                                <th>type</th>
                                <th>name_region</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $region->id }}</th>
                                    <th>{{ $region->country }}</th>
                                    <th>{{ $region->category }}</th>
                                    <th>{{ $region->type }}</th>
                                    <th>{{ $region->name_region }}</th>
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