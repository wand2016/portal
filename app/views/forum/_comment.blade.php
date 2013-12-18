<div class="comment" id="comment-{{ $comment->id }}">
        {{ $comment->body }}

        <div class="user">
            {{ $comment->author->thumbnail }}
            <div class="info">
                <h6><a href="{{ $comment->forumThreadUrl }}">{{ $comment->author->name }}</a></h6>
                <ul class="meta">
                    <li>{{ $comment->created_ago }}</li>
                </ul>
            </div>
        </div>
        @if(Auth::user() && $comment->author_id == Auth::user()->id)
            <div class="admin-bar">
                <li><i class="icon-link"></i>&nbsp;<a href="{{ action('ForumController@getEditComment', [$comment->id]) }}">Edit</a></li>
                <li><i class="icon-link"></i>&nbsp;<a href="{{ action('ForumController@getDelete', [$comment->id]) }}">Delete</a></li>
            </div>
        @endif
</div>