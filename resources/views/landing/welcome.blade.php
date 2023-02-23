<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rent Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" href="">
</head>

<body>
    {{-- Awal Navbar --}}
    <nav class="navbar navbar-dark navbar-expand-lg " style="background-color: #7B8FA1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/icon-1.png" alt="Logo" width="50" height="50" class="d-inline-block ">
                YanRents</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Novel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        </ul>
                        <li class="nav-item">
                            @auth
                                <form action="{{ route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="nav-link active btn btn-outline-danger">Logout</button>
                                @else
                                <a class="nav-link btn btn-outline-secondary btn-sm" href="/login">Login</a>
                            </form>
                            @endauth
                        </li>
                </ul>
                </li>
                </ul>
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}

    {{-- carousels --}}
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 400px; max-width:100%"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="https://img.freepik.com/free-vector/tiki-bar-cartoon-ad-posters-with-tribal-masks-bamboo-frames-palm-leaves-promo-posters-beach-hut-bar-food-drink-signboards-with-glowing-fonts-amusement-establishment-banners_107791-6832.jpg?size=626&ext=jpg&ga=GA1.2.197156762.1665232263&semt=sph"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>

            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://img.freepik.com/premium-vector/special-offer-banner-template-design-web-social-media_39705-357.jpg?size=626&ext=jpg&ga=GA1.1.816235923.1668582130&semt=sph"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>

            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://img.freepik.com/free-vector/shopping-day-flash-sale-design-with-66-number-podium-falling-confetti-6-june-special-offer_1314-3338.jpg?size=626&ext=jpg&ga=GA1.2.816235923.1668582130&semt=sph"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- end carousels --}}


    {{-- Awal Jumbtron --}}
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-4">
                <h2>YanBook</h2>
                <a href="/register" class="btn btn-outline-primary">Ayo Daftar sekarang</a>
            </div>
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione libero suscipit nulla tempore at
                    architecto sit alias dicta labore in, nostrum quae facilis ipsa magni, animi vero voluptas, cum
                    facere. Officiis pariatur ullam saepe repudiandae! Excepturi ut sequi vero inventore.</p>
            </div>
        </div>
    </div>
    {{-- Akhir Jumbtron --}}


    {{-- awal Card Pupular Book --}}
    <section class="" style="background-color: #7B8FA1">
        <div class="container my-5 me-5">
            <div class="row text-center text-white">
                <h2>Popular Book</h2>
                <hr class="solid">
            </div>
            <div class="row mt-3 ">
                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75"
                            class="card-img-top"
                            alt="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75">
                        <div class="card-body" style="max-height: 200px">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75"
                            class="card-img-top"
                            alt="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75">
                        <div class="card-body" style="max-height: 200px">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75"
                            class="card-img-top"
                            alt="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75">
                        <div class="card-body" style="max-height: 200px">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Awal Akhir Popular book --}}

    {{-- Awal Contact --}}
    <div class="container">
        <div class="row text-center">
            @if(session()->has('berhasil'))
            <div class="alert alert-success col-lg-10" role="alert">
                {{ session('berhasil')}}
            </div>
            @endif
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    {{-- Akhir Contact --}}

    {{-- Awal Footer --}}
    <footer class=" bg-secondary text-center mt-3" id="footer" style="height: 40px">
        <p>Creatd By <a href="https://github.com/ryanngab" style="text-decoration:none; color:white;"
                target="blank_">Muhamad Riyan Firdaus</a></p>
    </footer>
    {{-- Akhir Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
