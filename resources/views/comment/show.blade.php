<div>
    <h1>Comment</h1>
    <div class="comment">
        <h2>{{ $comment->content }}</h2>
        
        @if($comment->author)
            <p class="author">By: {{ $comment->author }}</p>
        @endif

        @if($comment->content)
            <div class="content">
                {{ $comment->content }}
            </div>
        @endif

        @if($comment->post_id)
            <p class="status">Published</p>
        @else
            <p class="status">Draft</p>
        @endif

        @if($comment->post_id)
            <a href="/blog/{{ $comment->post_id }}">{{ $comment->post->title }}</a>
        @endif
    </div>

    <a href="{{ url('/comments') }}">Back to Comments</a>
</div>
