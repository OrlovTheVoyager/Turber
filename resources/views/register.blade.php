
@section('content')
    <div class="container">
        <h1 style="text-align: center;">Register: </h1>
        <form action="/register" method="POST" id="registration_form">
            {{ csrf_field() }}
            <label for="name">Name: </label>
            <input type="text" id="name" class="u-full-width" name="name" placeholder="Enter your name">
            <div class="row">
                <div class="four columns">
                    <label for="type">Type: </label>
                    <select id="type" class="u-full-width" name="type" form="registration_form">
                        <option value="tourguide">Tourguide</option>
                        <option value="agency">Agency</option>
                    </select>
                </div>
                <div class="eight columns">
                    <label for="licence">Licence: </label>
                    <input type="text" id="licence" class="u-full-width" name="licence" placeholder="Enter your licence">
                </div>
            </div>
            
            <div class="row">
                <div class="six columns">
                    <label for="phone">Phone: </label>
                    <input type="tel" id="phone" class="u-full-width" name="phone" placeholder="Enter your phone">
                </div>
                <div class="six columns">
                    <label for="email">Email address: </label>
                    <input type="email" id="email" class="u-full-width" name="email" placeholder="Enter your email address">
                </div>
            </div>
            
            <div class="row">
                <div class="six columns">
                    <label for="password">Password: </label>
                    <input type="password" id="password" class="u-full-width" name="password" placeholder="Enter password">
                </div>
                <div class="six columns">
                    <label for="password_confirmation">Password Confirmation: </label>
                    <input type="password" id="password_confirmation" class="u-full-width" name="password_confirmation" placeholder="Confirm your password">
                </div>
            </div>

            <input type="submit" class="button-primary" value="Sign Up">
        </form>
        @include ('layouts.errors')
    </div>
@endsection

@include('layouts.master')