<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>English for all</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        #menu .carousel-inner img {
            max-height: 80vh;
            object-fit: cover;
        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 100px;
            height: 75px;
            text-align: center;
            text-decoration: none;
            border-radius: 600px;
        }

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.7;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        /* Twitter */
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        /* youtube */
        .fa-youtube {
            background: #FF0000;
            color: white;
        }

        /* Instagram */
        .fa-instagram {
            background: #800000;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-top">
                English For All
            </a>
        </div>
    </nav>
    <div id="menu">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/books.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/library.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/reading.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12" align="center">
                <img src="{{ asset('images/logo.png') }}" width="40%" alt="English For All" />
                <p class="text-danger text-center">Download the app in google play store</p>
                <a class="text-center" href="https://play.google.com/store" target="-blank"><img src="{{ asset('images/download.png') }}" width="150px" height="75px" alt="Download"></a>
            </div>

        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Facebook</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.facebook.com/englishforallnochistlan" target="_blank" class="fa fa-facebook"></a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Youtube</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.youtube.com/channel/UCVuaU5TIHLXojNBiMlkb-UQ" target="_blank" class="fa fa-youtube"></a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-dark" href="https://efa.edu.mx/" target="_blank">efa.edu.mx</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>