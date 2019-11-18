@extends('layout')

<style>
        .display-comment .display-comment {
            margin-left: 40px;
            margin-bottom: 80px;
        }
    </style>

    @section('content')

    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-info">
                    <div class="card-body">
                            <h2 class="text-secondary">All Your Tweets</h2>
                        <p><b>Trending Topic: {{ $post->title }}</b> posted by- {{ $post->fullname}}</p>
                        <p>
                            {{ $post->body }}
                        </p>
                        <hr />
                        <h5 class="text-white">Comments Timeline</h5>
                        @include('soccer.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                        <hr />
                        <h6>Add New comment</h6>
                        <form method="post" action="{{ route('comment.add') }}">

                            <div class="form-group">
                                <input type="text" name="comment_body" class="form-control" required/>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Add Comment" />
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

