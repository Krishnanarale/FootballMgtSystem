@extends('layouts.front')

@section('content')
<style type="text/css">
    .w-15 {
        width: 15%;
    }

    a.navbar-brand {
        color: #000 !important;
    }

    .pd-5 {
        padding-bottom: 3rem;
    }

    section#BreadcrumbNav {
        background: url(/frontTheam/img/football1.jpg) no-repeat;
        width: 100%;
        border-radius: 0;
        margin: 0;
        padding: 90px 0;
        background-position: center;
        background-size: cover;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: #fff !important;
    }

    .breadcrumb li a {
        color: #fff;
    }

    .breadcrumb li {
        color: #fff !important;
    }

    .headDescription h3 {
        color: #fff;
    }

    .DescriptionContent p {
        color: #fff;
    }

    .breadcrumb {
        background-color: unset;
        padding: 0;
    }

    .breadcrumb ol {
        margin: 0;
        padding: 0;
    }

    div#carouselExampleControls .carousel-inner {
        height: 350px;
    }

    div#carouselExampleControls .carousel-inner img {
        height: 100%;
    }

    section#PlayerBiog {
        background: url(/frontTheam/img/player-bg.jpg) no-repeat;
        width: 100%;
        border-radius: 0;
        margin: 0;
        padding: 0;
        background-position: center;
        background-size: cover;
    }

    tr.bg-red {
        background: red;
        border: none;
    }

    .NBAtable .table thead th {
        border-bottom: none;
    }

    .NBAtable .table tr td {
        border-top: none;
        border-bottom: 1px solid #eee;
    }
</style>
}
<!-- single player -->

<div class="content-wraper">
    <section id="PlayerInfo" class="player-info-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="{{ $player->user->first_name }} {{ $player->user->last_name }}" width="500px">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="PlayerInfoContent">
                        <ul>
                            <li class="m-4"><strong>Name : {{ $player->user->first_name }} {{ $player->user->last_name }}</strong></li>
                            <li class="m-4"><strong>Gender : {{ ucfirst($player->gender) }}</strong></li>
                            <li class="m-4"><strong>DOB : {{ $player->date_of_birth }}</strong></li>
                            <li class="m-4"><strong>Phone : {{ $player->phone }}</strong></li>
                            <li class="m-4"><strong>Address : {{ $player->address }}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="PlayerBiog" class="player-biography mt-5">
        <div class="bg-dark-none">
            <div class="container">
                <div class="full-description pt-5 pd-5">
                    <div class="headDescription mb-3">
                        <h3>BIOGRAPHY</h3>
                    </div>
                    <div class="DescriptionContent">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- single player -->
@endsection