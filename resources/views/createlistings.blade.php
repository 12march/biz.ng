@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listings</div>

                <div class="card-body">

                    <form action="/listings" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label><strong> Companies Name </strong></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Address </strong></label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Website </strong></label>
                            <input type="text" class="form-control" name="website" placeholder="Enter website" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Email </strong></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Phone </strong></label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone" required>
                        </div>

                        <div class="form-group">
                            <label><strong> Companies Bio </strong></label>
                            <textarea class="form-control" name="bio" required></textarea>
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
