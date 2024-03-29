@extends('layouts.admin.adminc')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table">
						<table class="table">
                            <span>List of the available categories</span>
                            <a href="{{ route('category.add')}}" class="btn btn-xs pull-right btn-success"> add a category </a>

                        <thead class="table-dark">
                            <th>Index</th>
                            <th>Name</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>delete</th>
                        </thead>

                        <tbody class="table-dark">
                            @foreach($categories as $category)
                                <tr>
                                    <th>{{ $category->id }}</th>
                                    <th>{{ $category->name_category }}</th>
                                   
                                    <th>
                                        <a href="{{ route('category.show', ['id'=>$category->id])}}" class="btn btn-sm btn-primary">Detail</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('category.edit', ['id'=>$category->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('category.delete', ['id'=>$category->id])}}" class="btn btn-sm btn-danger">delete</a>
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