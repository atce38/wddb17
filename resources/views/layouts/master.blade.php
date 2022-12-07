<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
        .logo{
            width: 200px;
        }
    </style>
</head>

<body>

    <div class="navbar navbar-expand-lg sticky-top navbar-light bg-light mb-4 w-100" role="navigation">
        <a class="navbar-brand" href="https://edu.abidingtech.com">
            <img class="logo img-fluid" src="https://edu.abidingtech.com/assets/img/atcelogo.png" alt="Abiding Tech Computer Education">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto mr-1 font-weight-bold">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/events">Events</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/portfolio">What Students Learn?</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/about-us">About US</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item ">
                    <a class="nav-link" href="https://edu.abidingtech.com/login">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="https://edu.abidingtech.com/register">Register</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" action="/search" method="get">
                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    @include('../components/messages/message')
    <div id="content">
        @yield('jameel')

    </div>

    <footer class="mainfooter col img-footer-logo text-dark" role="contentinfo">
        <div class="row bg-success">
            <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <a href="https://edu.abidingtech.com">
                            <img class="img-fluid logo" src="/assets/img/atcelogo.png"
                                alt="Abiding Tech Computer Education">
                        </a>
                        <div class="h5 top20">
                            Address:
                            11-E Near Rathore House, Block E, Satellite Town, Gujranwala

                        </div>
                        <h4 class="top30">Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/ATCEofficial/" target="_blank" class="icoFacebook"
                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC7e6iVdJ5CNSpxdmNmObDFw" target="_blank"
                                    class="youtube" title="Abiding Tech Youtube"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm text-center">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold h2">Contact</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                        <p class="h4">
                            <i class="fa fa-envelope mr-3"></i> support@edu.abidingtech.com</p>
                        <p class="h4">
                            <i class="fa fa-whatsapp mr-3"></i> + 92 303 6850464</p>
                        <p class="h4">
                            <i class="fa fa-whatsapp mr-3"></i> + 92 305 7718742</p>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12 copy top20">
                        <p class="text-center">© Copyright 2022 - Abiding Tech Computer Education. All rights
                            reserved.</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="modal fade" id="playModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">Download our Android app from Playstore</h5>
                        <button data-dismiss="modal" type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="text-center modal-body">
                        <div class="">Download our Android to have awesome experience</div>
                        <div class="">
                            <a href="https://play.google.com/store/apps/details?id=com.abidingtech.edu.wd"><img
                                    class="img-fluid" src="/assets/images/logo/playstore.png" alt="playstoer"></a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
