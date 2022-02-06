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
                        <div class="col-md-11">
                            <div class="card">
                                <div class="p-3">
                                    <h6>Comments</h6>
                                </div>
                                <form class="mt-3 d-flex flex-row align-items-center p-3 form-color">
                                    <img src="{{ Auth::user()->photo_url }}" width="50" class="rounded-circle mr-2">
                                    <input type="text" class="form-control" id="comment-message" placeholder="Enter your comment...">
                                    <button type="submit" class="d-none" id="comment-submit"></button>
                                </form>
                                <div class="mt-2">
                                    @forelse ( $article->comments as $comment)
                                    <div class="d-flex flex-row p-3">
                                     <img src="{{ $comment->user->photo_url }}" width="40" height="40" class="rounded-circle mr-3">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-row align-items-center mx-2">
                                                    <span class="mr-2">{{ $comment->user->name }} </span>
                                                </div>
                                                <small>{{ $comment->created_at }}</small>
                                            </div>
                                            <p class="text-justify comment-text mb-0">{{ $comment->content }}</p>
                                            <div class="d-flex flex-row user-feed">
                                                <span class="wish">
                                                    <i class="fa fa-heartbeat mr-2"></i>
                                                    <span>24</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                       <h2>No comments avaliable</h2>
                                    @endforelse

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
@section('js')
<script>
window.objectId = "{!! $article->article_id !!}"
window.creator = "{!! Auth::user()->id !!}";
</script>
<script src="{{ asset('js/articles/show.js')}}"></script>
<script>

</script>
@endsection

