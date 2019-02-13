
@section('content')
    <h1 style="text-align: center;">Register: </h1>
    <form action="/register" method="POST" id="registration_form">
        {{ csrf_field() }}
        <label for="type">Type: </label>
        <select id="type" name="type" form="registration_form">
            <option value="tourguide">Tourguide</option>
            <option value="agency">Agency</option>
        </select>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <label for="licence">Licence: </label>
        <input type="text" id="licence" name="licence" placeholder="Enter your licence">
        <label for="phone">Phone: </label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone">
        <label for="email">Email address: </label>
        <input type="email" id="email" name="email" placeholder="Enter your email address">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" placeholder="Enter password">
        <label for="password_confirmation">Password Confirmation: </label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
        <input type="submit" class="button-primary" value="Sign Up">
    </form>
    @include ('layouts.errors')
@endsection

@include('layouts.master')