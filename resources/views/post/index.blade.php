<div>
    <h1>Blogs</h1>
    @foreach ($posts as $post)
        <h3>{{ $post['title'] }}</h3>
        @if(isset($post['content']))
            <h4>{{ $post['content'] }}</h4>
        @endif
    @endforeach
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
