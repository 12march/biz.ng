@extends('layouts.app')

@section('content')
<div class="container">
        @include('inc.message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                        <span class="pull-right">
                            <a href="/listings/create" class="btn btn-success btn-sm pull-right">Add Listing</a>
                        </span>
                </div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if (count($listings))
                        
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td>
                                    <a href="/listings/{{ $listing->id }}/edit" class="pull-right btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="/listings/{{ $listing->id }}" method="POST" onsubmit="confirm('Are you sure')">
                                        {{ csrf_field() }}
                
                                        <input type="hidden" name="_method" value="DELETE">
                
                                        <div class="form-group">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </div>
                
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                        
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
