@extends('layouts.user.t2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
					<div class="table">
						<table class="table">
                            <h2 class="row justify-content-center">what site would you like to visit?</h2>
                        <thead class="table-dark">
                            <th><center><h3>Click on one of the Sites</h3></center></th>
                        </thead>

                        <tbody>
                            @foreach($sites as $site)
                                    <tr>
                                        <th><center><a href="{{ route('tsite.show', ['id'=>$site->id])}}"><h3>Would you like to visite <strong> {{ $site->name_site }}</strong>?</h3></center></a></th>
                                        
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