
@section('content')

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="row">
                <div class="input-field">
                    <input type="text" id="title" name="title" value="{{ $post->title }}">
                    <label for="title">Title:</label>
                </div>
                <div class="input-field col s6">
                    <input type="date" id="date_from" name="date_from" class="datepicker" value="{{ $post->date_from }}">
                    <label for="date_from">From:</label>
                </div>
                <div class="input-field col s6">
                    <input type="date" id="date_to" name="date_to" class="datepicker" value="{{ $post->date_to }}">
                    <label for="date_to">To:</label>
                </div>
            </div>
            
            <div class="input-field">
                <input type="text" id="languages" name="languages" value="{{ $post->languages }}">
                <label for="languages">Languages:</label>
            </div>
            <div class="input-field">
                    <input type="text" id="location" name="location" value="{{ $post->location }}">
                    <label for="location">Location:</label>
                </div>
            <div class="input-field">
                <textarea class="materialize-textarea" id="text" name="text">{{ $post->text }}</textarea>
                <label for="text">Text:</label>
            </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>

@endsection

@include('layouts.master_auth')