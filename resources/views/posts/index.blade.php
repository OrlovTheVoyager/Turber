
{{-- View for displaying all posts. --}}

@section('title')

    <h3>ALL POSTS</h3>

@endsection

@section('content')

    @foreach ($posts as $post)

        <div class="row">
            <div class="col s10">
                <h5>{{ $post->header }}</h5>
                <p>by {{ App\User::find($post->user_id)->name }}</p>
                <p>{{ str_limit($post->body, 200) }}</p>
            </div>
            <div class="col s2">
                <a href="/posts/{{ $post->id }}">View</a>
            </div>            
        </div>
        
    @endforeach

    <a href="/posts/create">Create a Post</a>

@endsection

@include('layouts.master')