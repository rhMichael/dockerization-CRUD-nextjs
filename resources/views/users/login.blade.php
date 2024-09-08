<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container login-div">
        <form action="{{ route('users.index') }}" method="POST">
        @csrf
            <h1 class="logo-title">Login</h1>
            <div class="input-div">
                <label for="">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="input-div">
                <label for="">Password</label>
                <input type="password" class="form-control">
            </div>
            <p>If you don't have an account - <a href="users/create" method="GET"><b>Register</b></a></p>
            <div>
                <button type="submit" class="btn btn-primary" style="float: right; width: 100%">Login</button>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</body>

</html>