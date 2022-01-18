@extends('layouts.user.t2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <h2 class="row justify-content-center">in which  region of the Country would you like to visit a tourist site?</h2>
                        <thead class="table-dark">
                            <th><center><h3>Click on one of the Regions</center></h3></th>
                        </thead>

                        <tbody>
                            @foreach($regions as $region)
                                    <tr>
                                        <th><center><a href="{{ route('tsite', ['id'=>$region->id])}}"><h3>Would you like to go to the <strong>{{ $region->name_region }}</strong> region? </h3></center></a></th>
                                        
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