@foreach($comments as $comment)
    <div class="display-comment">
        {{--  <strong>{{ $comment->user->name }}</strong>  --}}
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">

            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" required/>
                <input type="hidden" name="post_id" value="{{ $post_id }}" required/>
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply"/>
            </div>
            @csrf
        </form>
        @include('soccer.comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach
