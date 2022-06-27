@extends('layouts.app_master')
@section('content')
    <div class="text-center py-5">
        <h1 class="text-center display-1 text-primary fw-bold">DashBoard</h1>
        @auth
            <p>Welcome <span class="text-primary fw-bold">{{ auth()->user()->name ?? auth()->user()->username }}</span>
                Your Account is authenticated successfully</p>

            <a href="/logout"><button class="btn btn-outline-primary shadow rounded">Log Out</button></a>
        @endauth
        @guest
            <p class="text-muted fw-bold display-5">Please Login or Register for watch the content</p>
        @endguest
    </div>
@endsection
