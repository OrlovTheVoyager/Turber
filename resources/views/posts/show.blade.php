
{{-- View for showing a single post. --}}

@section('content')

    <div class="post">
        <h2>{{ $post->title }}</h2>
        <div class="row">
            <div class="six columns">
                <h5>Languages:</h5>
                <p>{{ $post->languages }}</p>
            </div>
            <div class="six columns">
                <h5>Location:</h5>
                <p>{{ $post->location }}</p>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <h5>From:</h5>
                <p>{{ date('d/m/Y', strtotime($post->date_from)) }}</p>
            </div>
            <div class="six columns">
                <h5>To:</h5>
                <p>{{ date('d/m/Y', strtotime($post->date_to)) }}</p>
            </div>
        </div>
        <div class="row">
            <h5>Description</h5>
            <p>{{ $post->text }}</p>
        </div>
        @include('posts.deledbuttons')
    </div>

@endsection

@include('layouts.master_auth')