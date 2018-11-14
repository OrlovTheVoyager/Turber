
{{-- View for displaying all posts. --}}

@section('title')

    <h3>ALL POSTS</h3>

@endsection

@section('content')

    <table class="highlight">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Languages</th>
                <th>Location</th>
                <th>From</th>
                <th>To</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>

            @foreach ($posts as $post)

                <tr>
                    <td><a class="td-link" href="/posts/{{ $post->id }}">{{ $post->header }}</a></td>
                    <td><a class="td-link" href="/users/{{ App\User::find($post->user_id)->id }}">{{ App\User::find($post->user_id)->name }}</a></td>
                    <td>Russian</td>
                    <td>Zlatibor</td>
                    <td>14.11.2018</td>
                    <td>20.11.2018</td>
                    <td><a class="btn" href="/posts/{{ $post->id }}">View</a></td>
                </tr>

            @endforeach

        </tbody>
    </table>

@endsection

@include('layouts.master')