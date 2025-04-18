<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Collapse Fix</title>
    <link rel="icon" href="{{ asset('asset/icon/gamelogo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
</head>

<body>
    <nav>
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('asset/icon/gamelogo.png') }}" alt="" width="180px">
            </div>
            <button class="menu-toggle" id="menu-toggle">&#9776;</button>
            <div id="myNavbar">
                <ul>
                    <li><a class="navlink" href="{{ '/' }}">Home</a></li>
                    <li><a class="navlink" id="blog" href="{{ '/blog' }}">Blog</a></li>
                    <li><a class="navlink" href="{{ '/contact' }}">Contact</a></li>
                    <li><a class="navlink" href="{{ '/about' }}">About</a></li>
                    @guest
                        <!-- Show login button if the user is not authenticated -->
                        <li><a href="/login" id="login-btn">Login</a></li>
                    @endguest

                    @auth
                        <!-- Show logout button if the user is authenticated -->
                        <li>
                            <a href="/logout" id="logout-btn"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ url('asset/js/navlinks.js') }}"></script>
</body>

</html>
