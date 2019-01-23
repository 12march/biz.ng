@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listings</div>

                <div class="card-body">

                    <form action="/listings/{{ $listing->id }}" method="POST">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label><strong> Companies Name </strong></label>
                        <input type="text" class="form-control" name="name" value="{{ $listing->name }}" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Address </strong></label>
                            <input type="text" class="form-control" name="address" value="{{ $listing->address }}" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Website </strong></label>
                            <input type="text" class="form-control" name="website" value="{{ $listing->website }}" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Email </strong></label>
                            <input type="email" class="form-control" name="email" value="{{ $listing->email }}" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Phone </strong></label>
                            <input type="text" class="form-control" name="phone" value="{{ $listing->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Companies Bio </strong></label>
                            <textarea class="form-control" name="bio" required>{{ $listing->bio }}</textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
