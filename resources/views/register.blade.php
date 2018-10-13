
{{-- View for registering. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TURBER | Register</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container" style="height:100vh;">
        <div class="row align-items-center" style="height:100vh;">
            <div class="col-md-6" style="margin: 0 auto 0 auto;">
                <h1 style="text-align: center;">Register: </h1>
                <form action="/register" method="POST" id="registration_form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="type">Type: </label>
                        <select class="form-control" id="type" name="type" form="registration_form">
                            <option value="tourguide">Tourguide</option>
                            <option value="agency">Agency</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="licence">Licence: </label>
                        <input type="text" class="form-control" id="licence" name="licence" placeholder="Enter your licence">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address: </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation: </label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 0 auto; display: block;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

// Check