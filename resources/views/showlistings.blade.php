@extends('layouts.app')

@section('content')
<div class="container">
        @include('inc.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ $listing->name }}</strong>
                    <span class="pull-right">
                            <a href="/listings" class="btn btn-danger btn-sm pull-right">Back</a>
                        </span>
                </div>

                <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Address:</strong> {{ $listing->address }}</a></li>
                            <li class="list-group-item"><strong>Website:</strong> {{ $listing->website }}</a></li> 
                            <li class="list-group-item"><strong>Email</strong> {{ $listing->email }}</a></li>
                            <li class="list-group-item"><strong>Phone</strong> {{ $listing->phone }}</a></li>
                        </ul>
                        <hr>
                        <div class="well">{{  $listing->bio }}</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
