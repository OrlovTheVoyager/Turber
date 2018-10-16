
{{-- View for showing a single post. --}}

@section('content')

    <div>
        <h5>{{ $post->header }}</h5>
        <p>{{ $post->body }}</p>
        @include('posts.deledbuttons')
    </div>

@endsection

@include('layouts.master')