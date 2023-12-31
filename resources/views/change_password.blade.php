<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>MyITS Community · Change Password</title>
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
    <link href="/styles/change_password.css" rel="stylesheet">
    <script src="/bootstrap/js/bootstrap.js"></script>

</head>

<body class="text-center">
    <section class="section-contents">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/icon.png" alt="" width="100" height="40" class="d-inline-block align-text-top" style="margin-right: 1rem">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Users</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                                <li><a class="dropdown-item" href="/change_password">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/new_post">New Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="form-signin">
            <form method="POST" action="/change_password">
                @csrf
                <img class="mb-4" src="/images/logo.png" alt="" width="175" height="auto">
                <h1 class="h3 mb-3 fw-normal">Change Password</h1>
                <div class="form-floating">
                    <input type="password" class="form-control @error('invalid') is-invalid @enderror" id="floatingInput" placeholder="Password" name="oldpassword">
                    <label for="floatingInput">Old Password</label>
                    @error('invalid')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('mismatch') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="newpassword">
                    <label for="floatingPassword">New Password</label>
                    @error('mismatch')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cnewpassword">
                    <label for="floatingPassword">Confirm New Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Change Password</button>
                <p class="mt-5 mb-3 text-muted">&copy; MyITS Community</p>
            </form>
        </main>
    </section>
</body>

</html>