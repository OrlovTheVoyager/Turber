
@section('content')
    <section class="sign-form">
        <h2>Login: </h2>
        <form action="/login" method="POST" id="registration_form">
            {{ csrf_field() }}
            <label for="licence">Licence: </label>
            <input type="text" id="licence" name="licence" placeholder="Enter your licence">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter password">
            <div class="row">
                <input type="submit" class="button-primary" value="Sign In">
            </div>
        </form>
        @include ('layouts.errors')
    </section>
@endsection

@include('layouts.master')