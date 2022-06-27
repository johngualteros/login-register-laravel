@extends('layouts.app_master')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <form action="/register" method="POST" class="card card-body border-0 p-5">
                <h1 class="text-center text-primary fw-bold display-3">Register</h1>

                @csrf
                @include('layouts.partials.messages')
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Your Username">
                    <label for="username" class="control-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                    <label for="email" class="control-label">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Your Password">
                    <label for="password" class="control-label">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    <label for="password_confirmation" class="control-label">Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-primary shadow-lg rounded">Register</button>
            </form>
        </div>
    </div>
@endsection
