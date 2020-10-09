@extends('layouts.front')

@section('content')
<style type="text/css">
    .w-15 {
        width: 15%;
    }

    .pd-5 {
        padding-bottom: 3rem;
    }

    section#BreadcrumbNav {
        background: url(img/football1.jpg) no-repeat;
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
        background: url(img/player-bg.jpg) no-repeat;
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

    .NBAtable table.table {
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
    }

    .NBAtable .table tr td {
        border: 1px solid #eee;
    }

    span.boxW {
        padding: 15px;
        background: blue;
        margin-right: 15px;
        color: #fff;
    }
</style>
<!-- single player -->

<div class="content-wraper">

    <!-- <section id="BreadcrumbNav" class="breadcrumb">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Defenders</a></li>
              <li class="breadcrumb-item active" aria-current="page">13 Neto</li>
            </ol>
          </nav>
        </div>
      </section> -->
    <!-- breadcrumb Nav -->

    <section id="PlayerProfile" class="player-Profile mt-5 w-100 float-left">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 playerName float-left w-100 mb-4">
                    <h2><span class="boxW">11</span><span class="Name">Shaun</span></h2>
                </div>
            </div>
            <div class="row float-left">
                <div class="col-sm-12 col-md-6">
                    <div class="PlayerProfile-img">
                        <img src="img/profile-image.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="PlayerInfoContent">
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Nationality:</strong></div>
                            <div class="player-value"><img src="img/indian-flag.png" style="width: 25px; margin-right: 10px;">Liechtenstein</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Position:</strong></div>
                            <div class="player-value">Defender</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Height:</strong></div>
                            <div class="player-value">1.71 m</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Weight:</strong></div>
                            <div class="player-value">65 kg</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Current Team:</strong></div>
                            <div class="player-value">Eagles</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Birthday:</strong></div>
                            <div class="player-value">September 28, 1992</div>
                        </div>
                        <div class="singleinfo-row mb-2 w-100 float-left">
                            <div class="player-label float-left mr-5 w-15"><strong>Age:</strong></div>
                            <div class="player-value">23</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="FinalTable" class="Final-Table mt-5 mb-5 float-left w-100">
        <div class="container">
            <div class="NBAtable">
                <h4 class="sp-table-caption mb-3">PRIMARY LEAGUE</h4>
                <table class="table">
                    <thead>
                        <tr class="bg-red">
                            <th class="text-white" scope="col">SEASON</th>
                            <th class="text-white" scope="col">TEAM</th>
                            <th class="text-white" scope="col">Goal</th>
                            <th class="text-white" scope="col">Assists</th>
                            <th class="text-white" scope="col">Yellow Cards</th>
                            <th class="text-white" scope="col">Red Cards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even">
                            <td scope="col">2015</td>
                            <td scope="col">Chicago Pros</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2016</td>
                            <td scope="col">Geckos</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2017</td>
                            <td scope="col">Chicago Pros</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2018</td>
                            <td scope="col">Geckos</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2019</td>
                            <td scope="col">Chicago Pros</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2020</td>
                            <td scope="col">Geckos</td>
                            <td scope="col">50</td>
                            <td scope="col">15</td>
                            <td scope="col">6</td>
                            <td scope="col">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<!-- single player -->
@endsection