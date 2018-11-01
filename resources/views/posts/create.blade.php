
{{-- View for creating a new post. --}}

@section('title')
    
    <h3>CREATE A POST</h3>

@endsection

@section('content')

    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s6">
                <input type="text" id="from_date" class="datepicker">
                <label for="from_date">From:</label>
            </div>
            <div class="input-field col s6">
                <input type="text" id="to_date" class="datepicker">
                <label for="to_date">To:</label>
            </div>
        </div>
        <div class="input-field">
            <input type="text" id="header" name="header">
            <label for="header">Title:</label>
          </div>
        <div class="input-field">
            <textarea class="materialize-textarea" id="body" name="body"></textarea>
            <label for="body">Text Body:</label>
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