@extends('layouts.front')

@section('content')

    <style type="text/css">
        .bg-black {
            background: #000;
        }

        a.navbar-brand {
            color: #000 !important;
        }

        nav.navbar.static-top {
            z-index: 11;
        }

        header.header-banner {
            margin-top: -160px;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #fff !important;
        }
        section.about-us-section {
            width: 100%;
            background-size: cover;
            background: url(/frontTheam/img/aboutUs-bk.jpg) no-repeat center;
        }
        .about-us-section-BK-color {
            background: #36353391;
            position: relative;
            padding:50px 0;
        }
        .about-us-section .about-us-section-BK-color:before {
            content: "";
            position: absolute;
            top: 0;
            right: 210px;
            bottom: 0;
            opacity: 0.8;
            left: -400px;
            z-index: 0;
            transform: skew(-33deg);
            display: block;
            background: #ffc722b8;
            width: 100%;
            max-width: 1040px;
        }
        .Habout-content h4 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 30px;
        }
        .Habout-content p {
            color: #fff;
            margin-bottom: 20px;
        }
        .card-img-box {
            float: left;
            width: 100%;
            height: 300px;
        }
        .card-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }
        section.showcase {
            background: #eee;
        }
    </style>

    <!-- Masthead -->
    <header class="header-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://i.pinimg.com/originals/35/ab/c5/35abc531feb94f545437080e8c606a6f.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://image.freepik.com/free-psd/soccer-club-training-camp-banner-template_23-2148406225.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/frontTheam/img/banner-three.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Icons Grid -->
    <section class="about-us-section bg-light text-center">
        <div class="about-us-section-BK-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 Habout-content">
                        <h4>About Club</h4>
                        <p>
                            Pataaki Football Academy is a non profit making football organisation whose aim is to nature young talented football athletes and improve life. By using sport as means of diverting the attention of the youth from participating in ilicit and uproductive activities such as drug abuse and joining gangs.
                            With the naturing of young talent at the helm Pataaki strives to usher in a generation
                            of principled, diciplined and educated youth that will add value to society as a whole
                        </p>
                        <p>
                            Pataaki Football Academy is a non profit making football organisation whose aim is to nature young talented football athletes and improve life. By using sport as means of diverting the attention of the youth from participating in ilicit and uproductive activities such as drug abuse and joining gangs.
                            With the naturing of young talent at the helm Pataaki strives to usher in a generation
                            of principled, diciplined and educated youth that will add value to society as a whole
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('frontTheam/img/football1.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="player-card-info mt-5 mb-5 w-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-head mb-5 text-center">
                        <h4>Beast Player</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($players as $player)
                    <div class="col-sm-4">
                        <a href="/players/{{ $player->id }}/show">
                            <div class="card">
                                <div class="card-img-box">
                                    <img class="d-block" src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="{{ $player->user->first_name }} {{ $player->user->last_name }}">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $player->user->first_name }} {{ $player->user->last_name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-sm-12">
                    <div class="alert alert-warning text-center">
                        <strong>Ohhh!</strong> No player available.
                    </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>


    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('frontTheam/img/football2.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Updated For Bootstrap 4</h2>
                        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontTheam/img/testimonials-1.jpg')}}" alt="">
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontTheam/img/testimonials-2.jpg')}}" alt="">
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('frontTheam/img/testimonials-3.jpg')}}" alt="">
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
