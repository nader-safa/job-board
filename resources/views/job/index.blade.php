<div>
    <h1>Job</h1>
    <h2>{{ $name }}</h2>
    @foreach ($jobs as $job)
        <h3>{{ $job['title'] }}</h3>
        @if(isset($job['description']))
            <h4>{{ $job['description'] }}</h4>
        @endif
    @endforeach
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
