
{{-- View for loging in. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TURBER | Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container" style="height:100vh;">
        <div class="row align-items-center" style="height:100vh;">
            <div class="col-md-6" style="margin: 0 auto 0 auto;">
                <h1 style="text-align: center;">Login: </h1>
                <form action="/login" method="POST" id="registration_form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="licence">Licence: </label>
                        <input type="text" class="form-control" id="licence" name="licence" placeholder="Enter your licence">
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 0 auto; display: block;">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>