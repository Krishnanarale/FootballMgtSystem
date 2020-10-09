@extends('layouts.front')

@section('content')

<style type="text/css">
    #card-team-nav ul {
        margin: 0;
        padding: 0 0 5px;
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    a.navbar-brand {
        color: #000 !important;
    }

    #card-team-nav ul li {
        list-style: none;
        margin: 0 2px;
        display: inline-block;
        text-align: center;
        padding: 5px 20px;
        border: 1px solid #eee;
        background: #f8f8f8;
        box-shadow: 0 0.1rem 0.2rem 0 rgba(0, 0, 0, .15);
    }

    #card-team-nav ul li a {
        color: #000;
    }

    .pt-50 {
        padding-top: 50px;
    }

    .cardBox {
        padding: 2px;
    }

    .player-overlap {
        display: flex;
        flex-wrap: wrap;
        bottom: 0;
        text-align: center;
        z-index: 11;
    }

    .cardBox a.card:before {
        content: "";
        position: absolute;
        bottom: 0;
        z-index: 10;
        left: 0;
        right: 0;
        background-image: linear-gradient(0deg, rgba(8, 14, 31, .9) 26%, rgba(24, 23, 51, 0) 50%);
        top: 0;
    }

    .player-overlap h5,
    .player-overlap span {
        color: #fff;
    }

    .player-point ul {
        margin: 0;
        padding: 0;
        text-align: center;
        width: 100%;
        display: inline-block;
    }

    .player-point li {
        font-size: 13px;
        list-style: none;
        margin: 0 6px;
        display: inline-block;
        color: #fff;
    }

    .player-point li span {
        font-size: 26px;
        font-weight: bold;
    }

    .player-overlap .card-body-head {
        transition: -webkit-transform .3s ease-out;
        transition: transform .3s ease-out;
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translateY(-1rem);
        transform: translateY(-1rem);
        text-align: center;
        color: #fff;
        margin-bottom: 0;
        position: absolute;
        bottom: 0;
    }

    .player-overlap .player-point {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        -webkit-transform: translateY(115%);
        transform: translateY(115%);
        transition: opacity .3s ease-out, -webkit-transform .3s ease-out;
        transition: transform .3s ease-out, opacity .3s ease-out;
        transition: transform .3s ease-out, opacity .3s ease-out, -webkit-transform .3s ease-out;
        padding-top: 1.4rem;
        margin-bottom: 1.1rem;
        opacity: 0;
        border-top: 1px solid #fff;
    }

    .cardBox a.card:hover .card-body-head {
        -webkit-transform: translateY(-8rem);
        transform: translateY(-8rem);
    }

    .cardBox a.card:hover .player-point {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }

    .player-img img {
        height: 350px;
        object-fit: cover;
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        #card-team-nav ul li {
            padding: 0 15px;
        }
    }

    @media screen and (max-width: 575px) {
        .cardBox {
            width: 50%
        }

        div#carouselExampleControls .carousel-inner {
            height: auto !important;
        }
    }

    @media screen and (max-width: 540px) {
        #card-team-nav ul li:first-child {
            margin-left: 0;
        }

        #card-team-nav ul {
            overflow: hidden;
            white-space: nowrap;
            overflow-y: hidden;
            overflow-x: scroll;
        }
    }

    @media screen and (max-width: 480px) {
        .player-img img {
            height: auto;
        }

        .cardBox {
            width: 100%
        }
    }
</style>

<!-- player Goalkeepers start -->

<!-- <section id="card-team-nav" class="nav tab-nav mt-5">
    <div class="container">
        <ul>
            <li><a href="#Goalkeepers.">Goalkeepers</a></li>
            <li><a href="#Defenders">Defenders</a></li>
            <li><a href="#Midfielders">Midfielders</a></li>
            <li><a href="#CoachingStaff">Coaching Staff</a></li>
        </ul>
    </div>
</section> -->

<section id="Goalkeepers" class="Card-List mt-5">
    <div class="container">
        <div class="row">
            <div class="player-head text-center w-100 p-3 mb-2">
                <h4>Players</h4>
            </div>
        </div>
        <div class="row">
            @foreach($players as $player)
            @if($player->user->is_admin != 1)
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 cardBox">
                <a href="/players/{{ $player->user_id }}/show" class="card position-relative">
                    <div class="player-img">
                        <img class="rounded-0 img-fluid" src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="Card image cap">
                    </div>
                    <div class="player-overlap w-100 position-absolute">
                        <div class="card-body-head w-100">
                            <h5 class="player-title"><b>{{ $player->user->first_name }} {{ $player->user->last_name }}</b></h5>
                            <!-- <span class="player-info">Goalkeeper</span> -->
                        </div>
                        <!-- <hr>
                        <div class="player-point w-100">
                            <ul>
                                <li class="">Barca Appearances<br /><span>8</span></li>
                                <li class="">Barca Clean Sheets<br /><span>3</span></li>
                                <li class="">Barca Saves<br /><span>9</span></li>
                            </ul>
                        </div> -->
                    </div>
                </a>
            </div><!-- cardBox -->
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection