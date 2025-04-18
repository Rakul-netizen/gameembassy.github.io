<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Collapse Fix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
</head>

<body>
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row g-4">
                <!-- Logo & Description -->
                <div class="col-lg-6 col-md-12">
                    <ul>
                        <li><img src="{{ asset('asset/icon/gamelogo.png') }}" alt="" width="180px"></li>
                        <li>
                            Console gaming continues to thrive in 2025 thanks to powerful hardware, exclusive titles, and a seamless user experience. With lightning-fast load times, stunning graphics, and immersive gameplay, consoles like the PlayStation 5 deliver high-quality gaming straight from the couch. The convenience of plug-and-play, along with online multiplayer and cloud saves.
                        </li>
                    </ul>
                </div>

                <!-- Navigation Links -->
                <div class="col-lg-1 col-md-4 col-6">
                    <ul class="list-unstyled hover">
                        <li>
                            <h5 class="fw-bold">Others</h5>
                        </li>
                        <li><a href="/">Home</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </div>

                <!-- Terms & Policies -->
                <div class="col-lg-2 col-md-4 col-6">
                    <ul class="list-unstyled hover">
                        <li>
                            <h5 class="fw-bold">Terms & Policy</h5>
                        </li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="col-lg-3 col-md-4 col-12">
                    <ul class="list-unstyled hover">
                        <li>
                            <h5 class="fw-bold">Follow us</h5>
                        </li>
                        <li><a href="/instagram" target="_blank">Instagram</a></li>
                        <li><a href="/facebook" target="_blank">Facebook</a></li>
                        <li><a href="/youtube" target="_blank">YouTube</a></li>
                    </ul>
                </div>

                <!-- Copyright -->
                <div class="col-12 text-center mt-4">
                    <p class="mb-0 small">&copy; {{ date('Y') }} Game Embassy. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
