@extends('layouts.admin.adminc')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <span>List of the available types</span>
                            <a href="{{ route('type.add')}}" class="btn btn-xs pull-right btn-success"> add a type </a>

                        <thead class="table-dark">
                            <th>Index</th>
                            <th>Name</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>delete</th>
                        </thead>

                        <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <th>{{ $type->id }}</th>
                                    <th>{{ $type->name_type }}</th>
                                   
                                    <th>
                                        <a href="{{ route('type.show', ['id'=>$type->id])}}" class="btn btn-sm btn-primary">Detail</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('type.edit', ['id'=>$type->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('type.delete', ['id'=>$type->id])}}" class="btn btn-sm btn-danger">delete</a>
                                    </th>
                                </tr>
                            @endforeach
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