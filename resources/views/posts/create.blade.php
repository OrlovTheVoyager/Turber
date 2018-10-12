
{{-- View for creating a new post. --}}

@section('content')

    <h1>Create a post:</h1>
    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="header">Text Title:</label>
            <input type="text" class="form-control" id="header" name="header">
        </div>
        <div class="form-group">    
            <label for="body">Text Body:</label>
            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Publish">
    </form>

@endsection

@include('layouts.master')