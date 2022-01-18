@extends('layouts.user.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <div class="card-body">
                        <a href="{{ route('tcategory')}}" class="btn btn-info btn-lg">category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
