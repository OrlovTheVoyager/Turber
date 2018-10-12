
{{-- View for showing a single post. --}}

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->header }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>

@endsection

@include('layouts.master')