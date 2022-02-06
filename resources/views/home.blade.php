@extends('layouts.app')
@section('content-header')
<header class="masthead" style=" background-color: #3f61b5;">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Hello {{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('main-content')
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center shadow p-3 mb-5 bg-white rounded">
                   <i class="far fa-newspaper fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Articles</h4>
                    </div>
                    <div class="text">
                        <span>Read your favourite articles for the day</span>
                    </div>
                    <a style="text-decoration: underline" href="{{ route('articles.index') }}">Learn More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                <div class="box-part text-center shadow p-3 mb-5 bg-white rounded">
                    <i class="fas fa-users fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Profiles</h4>
                    </div>
                    <div class="text">
                        <span>View and connect with other users</span>
                    </div>
                    <a style="text-decoration: underline" href="{{ route('users.index') }}">Learn More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center shadow p-3 mb-5 bg-white rounded">
                    <i class="fas fa-photo-video fa-3x" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Photos and Videos</h4>
                    </div>
                    <div class="text">
                        <span>View your favourite photos and videos</span>
                    </div>
                    <a style="text-decoration: underline" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

