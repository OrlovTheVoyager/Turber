
@section('content')

    <div class="row">
        <button>Button element</button>
        <button>Button element</button>
        <button>Button element</button>
        <input type="text">
    </div>

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
                    <td><a class="td-link" href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td><a class="td-link" href="/users/{{ App\User::find($post->user_id)->id }}">{{ App\User::find($post->user_id)->name }}</a></td>
                    <td>{{ $post->languages }}</td>
                    <td>{{ $post->location }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->date_from)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->date_to)) }}</td>
                    <td><a class="button" href="/posts/{{ $post->id }}">View</a></td>
                </tr>

            @endforeach

            @if (count($posts) === 0)
            <tr>
                <td colspan="7" class="empty_table"style="text-align: center;">There are no posts!</td>
            </tr>

            @endif
        </tbody>
    </table>

@endsection

@include('layouts.master_auth')