
{{-- View for displaying all posts. --}}

@section('title')

    <h3>ALL POSTS</h3>

@endsection

@section('content')

    @foreach ($users as $user)

        <div class="row">
            <div class="col s10">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->type }}</p>
                <p>{{ $user->email }}</p>
            </div>
            <div class="col s2 btn-holder">
                <a href="/posts/{{ $user->id }}" class="btn btn-view">View</a>
            </div>
        </div>
        <hr>

    @endforeach

@endsection

@include('layouts.master')