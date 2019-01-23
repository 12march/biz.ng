@extends('layouts.app')

@section('content')
<div class="container">
        @include('inc.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Latest Business Listing</h4></div>

                <div class="card-body">
                    @if (count($listings))
                        <ul class="list-group">
                            @foreach ($listings as $listing)
                               <li class="list-group-item">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                                </li> 
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
