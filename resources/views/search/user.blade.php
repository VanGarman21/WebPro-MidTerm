<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>MyITS Community · Search Users</title>
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
    <script src="/bootstrap/js/bootstrap.js"></script>
    <!-- Custom styles for this template -->
    <link href="/styles/users.css" rel="stylesheet">
</head>

<body class="discussion">

    <section class="discussion-title">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/images/icon.png" alt="" width="100" height="40" class="d-inline-block align-text-top" style="margin-right: 1rem">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/users">Users</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">View Profile</a></li>
                                <li><a class="dropdown-item" href="/change_password">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" method="get" action="/search/user">
                        <input name="username" class="form-control me-2" type="search" placeholder="Search Users" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="wrapper">
            @forelse ($users as $u)
            <div class="user-display">
                <div class="user-information">
                    <img class="profile-logo" src="../images/profile.png" alt="profile-logo">{{$u->username}}
                    <button type="submit" class="follow-button">View</button>
                </div>
            </div>
            @empty
            <main class="discussion-title-content">
                <h1 style="text-align: center;">User not found</h1>
            </main>
            @endforelse
        </div>
    </section>
    <br>

    <br>
</body>