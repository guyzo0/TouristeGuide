@extends('layouts.user.t2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <h2 class="row justify-content-center">what type of this category  would you like to visit?</h2>
                        <thead class="table-dark">
                            <th><h3><center>Click on one types of the category</h3><center></th>
                        </thead>

                        <tbody>
                            @foreach($types as $type)
                                    <tr>
                                        <th><center><a href="{{ route('tregion', ['id'=>$type->id])}}"><h3>would you like to visit <strong>{{ $type->name_type }}</strong> {{ $type->category }}?</h3></a></center></th>
                                        
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