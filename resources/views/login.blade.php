
@section('content')
    <h2>Login: </h2>
    <form action="/login" method="POST" id="registration_form">
        {{ csrf_field() }}
        <label for="licence">Licence: </label>
        <input type="text" id="licence" name="licence" placeholder="Enter your licence">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" placeholder="Enter password">
        <input type="submit" class="button-primary" value="Sign In">
    </form>
    @include ('layouts.errors')
@endsection

@include('layouts.master')