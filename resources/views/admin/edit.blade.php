
{{-- View for editing a User. --}}

@section('content')

    <form action="/users/{{ $user->id }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')    
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        <input type="text" class="form-control" id="licence" name="licence" value="{{ $user->licence }}">
        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
        <div class="form-group">
            <select class="form-control" id="type" name="type">
                <option value="tourguide">Tourguide</option>
                <option value="agency">Agency</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Publish">
    </form>    
    <br>
    <form action="/users/{{ $user->id }}" method="POST">
        {{ csrf_field() }}
        @method('DELETE')
        <input type="submit" class="btn btn-primary" value="Delete">
    </form>

@endsection

@include('layouts.master')