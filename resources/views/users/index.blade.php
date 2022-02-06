@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/users/index.css')}}" />
@endsection
@section('content-header')
<header class="masthead" style=" background-color: #3f61b5;">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Users</h1>
                </div>
            </div>
        </div>
    </div>
</header>
@section('main-content')
<div class="container">
    <div class="row">
       @forelse ($users as $user)
         <div class="col-md-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="{{ $user->photo_url }}" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10">{{ $user->name }}</h6>
                    <p class="text-muted">{{ $user->email }}</p>
                    <hr>
                    <div>
                    <a class="border border-dark border-3 px-2 py-2" href="{{ route('users.show', $user)}}">View Profile</a>
                    </div>
                </div>
            </div>
        </div>  
       @empty
           <h3>No Users</h3>
       @endforelse
        
    </div>
</div>
@endsection
