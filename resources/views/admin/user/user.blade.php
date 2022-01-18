@extends('layouts.admin.adminc')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <span>List of the users who have an account</span>

                        <thead class="table-dark">
                            <th>Index</th>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Created date</th>
                            <th>Edit</th>
                            <th>delete</th>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->email }}</th>
                                    <th>{{ $user->contact }}</th>
                                    <th>{{ $user->address }}</th>
                                    <th>{{ $user->created_at }}</th>
                                   
                                   
                                    <th>
                                        <a href="{{ route('user.edit', ['id'=>$user->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('user.delete', ['id'=>$user->id])}}" class="btn btn-sm btn-danger">delete</a>
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