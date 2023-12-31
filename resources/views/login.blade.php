<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>MyITS Community · Login</title>
    <link rel="icon" type="image/x-icon" href="/images/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="/styles/login.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="/login">
            @csrf
            <img class="mb-4" src="/images/logo.png" alt="" width="175" height="77">
            <h1 class="h3 mb-3 fw-normal">Sign In</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session('failed'))
                <div class="alert alert-danger" role="alert">
                    Wrong Password or Email!
                </div>
            @endif
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ Session::get('email') }}" id="floatingInput" placeholder="name@example.com"
                    name="email">
                <label for="floatingInput">Email address</label>

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>


            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    value="{{ Session::get('password') }}" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>

                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <p>Didn't have account? <a href="/register">Sign up</a></p>

            <div class="checkbox mb-3 mx-auto">
                <label for="remember">
                    <input type="checkbox" name="remember" value="1"> Remember me
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; MyITS Community</p>
        </form>
    </main>
</body>

</html>
