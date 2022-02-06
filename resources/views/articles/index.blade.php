@extends('layouts.app')
@section('content-header')
<header class="masthead" style=" background-color: #3f61b5;">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Articles</h1>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('main-content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
           @forelse ($articles as $article)
               <div class="post-preview">
                <a href="{{ route('articles.show', $article )}}">
                    <h2 class="post-title">{{ $article->title }}</h2>
                    <h3 class="post-subtitle">{{ $article->summary }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="{{ route('users.show', $article->user) }}">{{ $article->user->name }}</a>
                    on {{ $article->created_at }}
                </p>
            </div>
             <hr class="my-4" />
           @empty
               <h2>No articles available</h2>
           @endforelse
        </div>
    </div>
</div>
@endsection
