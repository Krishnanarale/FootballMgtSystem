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

    <section id="BreadcrumbNav" class="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Defenders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">13 Neto</li>
                </ol>
            </nav>
        </div>
    </section><!-- breadcrumb Nav -->

    <section id="PlayerInfo" class="player-info-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('frontTheam/img/football1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('frontTheam/img/football2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('frontTheam/img/football3.jpg')}}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('frontTheam/img/football4.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="PlayerInfoContent">
                        <div class="singleinfo-row mb-2">
                            <div class="player-label float-left mr-5 w-15"><strong>Nationality:</strong></div>
                            <div class="player-value">Liechtenstein</div>
                        </div>
                        <div class="singleinfo-row mb-2">
                            <div class="player-label float-left mr-5 w-15"><strong>Position:</strong></div>
                            <div class="player-value">Defender</div>
                        </div>
                        <div class="singleinfo-row mb-2">
                            <div class="player-label float-left mr-5 w-15"><strong>Leagues:</strong></div>
                            <div class="player-value">NBA Finals, Secondary League</div>
                        </div>
                        <div class="singleinfo-row mb-2">
                            <div class="player-label float-left mr-5 w-15"><strong>Age:</strong></div>
                            <div class="player-value">4</div>
                        </div>
                        <div class="singleinfo-row mb-2">
                            <div class="player-label w-100"><strong>Description:</strong></div>
                            <div class="player-value">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="FinalTable" class="Final-Table mt-5">
        <div class="container">
            <div class="NBAtable">
                <h4 class="sp-table-caption mb-3">NBA Finals</h4>
                <table class="table">
                    <thead>
                        <tr class="bg-red">
                            <th scope="col">SEASON</th>
                            <th scope="col">TEAM</th>
                            <th scope="col">MIN</th>
                            <th scope="col">FGM</th>
                            <th scope="col">FGA</th>
                            <th scope="col">PTS</th>
                            <th scope="col">RPG</th>
                            <th scope="col">BPG</th>
                            <th scope="col">PPG</th>
                            <th scope="col">EFF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even">
                            <td scope="col">2015</td>
                            <td scope="col">Chicago Pros</td>
                            <td scope="col">2</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">0</td>
                            <td scope="col">14</td>
                            <td scope="col">0.0</td>
                            <td scope="col">0.0</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2016</td>
                            <td scope="col">Memphis Tigers</td>
                            <td scope="col">2</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">0</td>
                            <td scope="col">14</td>
                            <td scope="col">0.0</td>
                            <td scope="col">0.0</td>
                            <td scope="col">0</td>
                        </tr>
                        <tr class="even">
                            <td scope="col">2017</td>
                            <td scope="col">Memphis Tigers</td>
                            <td scope="col">2</td>
                            <td scope="col">2</td>
                            <td scope="col">3</td>
                            <td scope="col">0</td>
                            <td scope="col">14</td>
                            <td scope="col">0.0</td>
                            <td scope="col">0.0</td>
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