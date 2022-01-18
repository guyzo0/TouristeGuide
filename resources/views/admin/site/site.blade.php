@extends('layouts.admin.adminc')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <span>List of the available sites</span>
                            <a href="{{ route('site.add')}}" class="btn btn-xs pull-right btn-success"> add a site </a>

                        <thead class="table-dark">
                            <th>Index</th>
                            <th>Name</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>delete</th>
                        </thead>

                        <tbody>
                            @foreach($sites as $site)
                                <tr>
                                    <th>{{ $site->id }}</th>
                                    <th>{{ $site->name_site }}</th>
                                   
                                    <th>
                                        <a href="{{route('tsite.show', ['id'=>$site->id])}}" class="btn btn-sm btn-primary">Detail</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('site.edit', ['id'=>$site->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('site.delete', ['id'=>$site->id])}}" class="btn btn-sm btn-danger">delete</a>
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