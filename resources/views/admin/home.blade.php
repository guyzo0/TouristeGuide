@extends('layouts.admin.adminh')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
                        <a href="{{ route('category')}}" class="btn btn-info btn-lg">category management</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('type')}}" class="btn btn-info btn-lg">type management</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('region')}}" class="btn btn-info btn-lg">region management</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('site')}}" class="btn btn-info btn-lg">site management</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('user')}}" class="btn btn-info btn-lg">user management</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-4 mt-4">
        <div class="col-md-8">
            <div class="card">
</form>

@endsection
