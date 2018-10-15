
{{-- View for displaying users posts. --}}

@section('content')

    @foreach ($user_posts as $user_post)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user_post->header }}</h5>
                <p class="card-text">{{ $user_post->body }}</p>
                <a href="/posts/{{ $user_post->id }}" class="btn btn-primary">View</a>
            </div>
        </div>
        
    @endforeach

    <a href="/posts/create" class="btn btn-primary">Create a Post</a>

@endsection

@include('layouts.master')