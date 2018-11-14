
{{-- View for displaying all posts. --}}

@section('title')

    <h3>USERS</h3>

@endsection

@section('content')

    <table class="highlight">
        <thead>
            <tr>
                <th>Name</th>
                <th>Licence Number</th>
                <th>E-mail</th>
                <th>User type</th>
                <th></th>
            </tr>
        </thead>

        <tbody>

            @foreach ($users as $user)

            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->licence }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type }}</td>
                <td><a class="btn" href="/users/{{ $user->id }}">View</a></td>
            </tr>

            @endforeach

        </tbody>
    </table>

@endsection

@include('layouts.master')