<div>
    <h1>Comments test</h1>
    @foreach ($comments as $comment)
        <h3><a href="/comments/{{ $comment['id'] }}"> {{ $comment['content'] }}</a></h3>
        @if(isset($comment['author']))
            <h4>{{ $comment['author'] }}</h4>
        @endif
        @if(isset($comment['post_id']))
            <h4>{{ $comment->post->title }}</h4>
        @endif
    @endforeach
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
