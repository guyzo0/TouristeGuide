@extends('layouts.admin.adminc')

@section('content')

<section class="ftco-section">
		<div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-info">
                            <h1 class="row justify-content-center">Displaying of the type detail</h1>
                            <thead class="table-dark">
                                <th>Index</th>
                                <th>Name</th>
                                <th>Cathegory</th>
                                <th>created date</th>
                                <th>updated date</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $type->id }}</th>
                                    <th>{{ $type->name_type }}</th>
                                    <th>{{ $type->category }}</th>
                                    <th>{{ $type->created_at }}</th>
                                    <th>{{ $type->updated_at }}</th>
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