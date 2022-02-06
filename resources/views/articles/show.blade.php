@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/articles/show.css')}}" />
@endsection
@section('content-header')
<header class="masthead" style=" background-color: #3f61b5;">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $article->title }}</h1>
                    <h2 class="subheading">{{ $article->summary }}</h2>
                    <span class="meta">
                        Posted by
                        <a href="{{ route('users.show', $article->user )}}">{{ $article->user->name }}</a>
                        on {{ $article->created_at }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('main-content')
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>{{ $article->content }}</p>
            </div>
            <div class="mt-6">
                <div class="container mt-5 mb-5">
                    <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="p-3">
                                    <h6>Comments</h6>
                                </div>
                                <form class="mt-3 d-flex flex-row align-items-center p-3 form-color"> 
                                <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2">
                                 <input type="text" class="form-control" placeholder="Enter your comment..."> 
                                 </form>
                                <div class="mt-2">
                                    <div class="d-flex flex-row p-3"> <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center">
                                                    <span class="mr-2">Brian selter</span>
                                                </div>
                                                <small>12h ago</small>
                                            </div>
                                            <p class="text-justify comment-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            <div class="d-flex flex-row user-feed">
                                                <span class="wish">
                                                    <i class="fa fa-heartbeat mr-2"></i>
                                                    <span>24</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</article>
@endsection

