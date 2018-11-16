
{{-- View for creating a new post. --}}

@section('title')
    
    <h3>CREATE A POST</h3>

@endsection

@section('content')

    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field">
                <input type="text" id="title" name="title">
                <label for="title">Title:</label>
            </div>
            <div class="input-field col s6">
                <input type="date" id="date_from" name="date_from" class="">
                <label for="date_from">From:</label>
            </div>
            <div class="input-field col s6">
                <input type="date" id="date_to" name="date_to" class="">
                <label for="date_to">To:</label>
            </div>
        </div>
        
        <div class="input-field">
            <input type="text" id="languages" name="languages">
            <label for="languages">Languages:</label>
        </div>
        <div class="input-field">
                <input type="text" id="location" name="location">
                <label for="location">Location:</label>
            </div>
        <div class="input-field">
            <textarea class="materialize-textarea" id="text" name="text"></textarea>
            <label for="text">Text:</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Publish">
    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
        });    
    </script>

@endsection

@include('layouts.master')