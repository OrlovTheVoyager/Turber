
{{-- View for displaying all posts. --}}

@section('content')

    @foreach ($posts as $post)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->header }}</h5>
                <p class="card-text">{{ $post->body }}</p>
                <a href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
                <form action="/posts/{{ $post->id }}" method="post">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </div>
        </div>
        
    @endforeach

    <a href="/posts/create" class="btn btn-primary">Create a Post</a>

@endsection

@include('layouts.master')