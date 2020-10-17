<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Font Concet One  -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!-- Font lato -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lato&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/jquery.nice-number.css"> -->

    <title>@yield('title')</title>
</head>

<body>

    <!-- Header top -->
    <div class="header_top">
        <div class="header_top__info">
            <p class=""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; 0123456789</p>
        </div>
        <div class="header_top__log d-flex flex-row-reverse">
            <p class=""><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Login</p>
        </div>
    </div>
    <!-- End Header top -->

    <!-- Header -->
    <div class="header">
        <div class="white-bg">
            <div class="container">
                <div class="header_nav" id="header_nav">
                    <a href="#"><img class="header_nav__img" src="{{ asset('img/logo.png') }}" alt=""> </a>
                    <div class="menu-toggle"></div>
                    <nav>
                        <ul class="header_ul">
                            <li class="header_li"><a class="header_a" href="#">Home</a></li>
                            <li class="header_li">
                                <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Massala Dishes</a>
                                    <a class="dropdown-item" href="#">Passanda Dishes</a>
                                    <a class="dropdown-item" href="#">Dansak Dishes</a>
                                    <a class="dropdown-item" href="#">Tandoori Specialities</a>
                                    <a class="dropdown-item" href="#">Kashmiri Dishes</a>
                                    <a class="dropdown-item" href="#">Malaya Dishes</a>
                                    <a class="dropdown-item" href="#">Korma Dishes</a>
                                    <a class="dropdown-item" href="#">Pathia Dishes</a>
                                </div>

                            </li>
                            <li class="header_li"><a class="header_a" href="#">Order</a></li>
                            <li class="header_li"><a class="header_a" href="#">Menu</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- header banner + search form -->
        @include('layouts.header_banner')
        <!-- End header banner + search form -->
    </div>
    <!-- End header -->


    @yield('content')





    <footer class="footer">
        <div class="container border-bottom p-4">
            <div class="row">
                <div class="footer_one col-md-6">
                    <p class="footer_one--title">Olees Kitchen</p>
                </div>
                <div class="footer_two col-md-3">
                    <div class="footer_two_box">
                        <a class="footer_two_box_link" href="#">About Olees kitchen</a>
                        <a class="footer_two_box_link" href="#">Read Our blog</a>
                        <a class="footer_two_box_link" href="#">Create a buisness account</a>
                        <a class="footer_two_box_link" href="#">Add your resturent</a>
                        <a class="footer_two_box_link" href="#">Career</a>
                        <a class="footer_two_box_link" href="#">About Olees kitchen</a>
                    </div>
                </div>
                <div class="footer_three col-md-3">
                    <div class="footer_two_box">
                        <a class="footer_two_box_link" href="#">Get Help</a>
                        <a class="footer_two_box_link" href="#">Read FAQ</a>
                        <a class="footer_two_box_link" href="#">Resutents near you</a>
                        <a class="footer_two_box_link" href="#">join as a rider</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer_text">Copyright ©2020, Developed By BetterTechSolutions, All Rights Reserved.</p>
    </footer>


    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!--  -->
</body>

</html>
