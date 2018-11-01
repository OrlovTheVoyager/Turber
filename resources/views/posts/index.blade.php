
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
            <div class="col s2 btn-holder">
                <a href="/posts/{{ $post->id }}" class="btn btn-view">View</a>
            </div>
        </div>
        <hr>

    @endforeach

@endsection

@include('layouts.master')