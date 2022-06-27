@extends('layouts.app_master')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <form action="/login" method="POST" class="card card-body border-0 p-5">
                <h1 class="text-center text-primary fw-bold display-3">Login</h1>
                @csrf
                @include('layouts.partials.messages')
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Your Username or Email">
                    <label for="username" class="control-label">Username/Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Your Password">
                    <label for="password" class="control-label">Password</label>
                </div>
                <button type="submit" class="btn btn-primary shadow-lg rounded">Login</button>
            </form>
        </div>
    </div>
@endsection
