
{{-- View for editing a post. --}}

@section('content')

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="form-group">
            <label for="header">Text Title:</label>
        <input type="text" class="form-control" id="header" name="header" value="{{ $post->header }}">
        </div>
        <div class="form-group">    
            <label for="body">Text Body:</label>
            <textarea class="form-control" id="body" rows="3" name="body">{{ $post->body }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Publish">
    </form>

@endsection

@include('layouts.master')