
{{-- View for showing a single post. --}}

@section('content')

    <div>
        <h5>{{ $post->title }}</h5>
        <p>{{ $post->languages }}</p>
        <p>{{ $post->location }}</p>
        <p>{{ date('d/m/Y', strtotime($post->date_from)) }}</p>
        <p>{{ date('d/m/Y', strtotime($post->date_to)) }}</p>
        <p>{{ $post->text }}</p>
        @include('posts.deledbuttons')
    </div>

@endsection

@include('layouts.master_auth')