
{{-- View for showing a single User. --}}

@section('content')

    <div>
        <p>{{ $user->name }}</p>
        <p>{{ $user->licence }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->type }}</p>
    </div>

@endsection

@include('layouts.master')