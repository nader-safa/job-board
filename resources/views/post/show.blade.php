<div>
    <h1>Blog Post</h1>
    <div class="post">
        <h2>{{ $post->title }}</h2>
        
        @if($post->author)
            <p class="author">By: {{ $post->author }}</p>
        @endif

        @if($post->content)
            <div class="content">
                {{ $post->content }}
            </div>
        @endif

        @if($post->published)
            <p class="status">Published</p>
        @else
            <p class="status">Draft</p>
        @endif

        @if($post->comments)
            <h3>Comments</h3>
            @foreach($post->comments as $comment)
                <p>{{ $comment->content }}, {{ $comment->author }}</p>
            @endforeach
        @endif
    </div>

    <a href="{{ url('/blog') }}">Back to Posts</a>
</div>
