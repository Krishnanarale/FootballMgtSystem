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
            background: url('/frontTheam/img/football1.jpg') no-repeat;
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
            color: #000;
        }
        .DescriptionContent table.table tr th, .DescriptionContent table.table tr td strong{
            color: #000;
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
            /* background: url('/frontTheam/img/player-bg.jpg') no-repeat;*/
            background: #ffc722;
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
        .table-bordered td, .table-bordered th{border:1px solid #212223; color: #000;}
        .table thead th{border:1px solid #212223; }
        .NBAtable .table tr td {
            border-top: none;
            border-bottom: 1px solid #eee;
        }
        .player-image {
            height: 100%;
            overflow: hidden;
            margin: 0 auto;
            text-align: center;
        }
        .player-image img {
            object-fit: cover;
            object-position: 50% 30%;
        }
        .PlayerInfoContent ul {
            padding: 0;
        }
        .PlayerInfoContent ul li:first-child {
            margin-top: 0 !important;
        }
        .DescriptionContent table.table tbody tr {
            cursor: pointer;
        }
    </style>
    <!-- single player -->

    <div class="content-wraper">
        <section id="PlayerInfo" class="player-info-content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 player-image">
                        <img class="img-rounded" src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="{{ $player->user->first_name }} {{ $player->user->last_name }}">
                    </div>
                    <div class="col-sm-12 col-md-6 player-details">
                        <div class="PlayerInfoContent">
                            <ul>
                                <li class="m-4"><strong>Name :</strong> {{ $player->user->first_name }} {{ $player->user->last_name }}</li>
                                <li class="m-4"><strong>UId :</strong> {{ $player->user->uuid }}</li>
                                <li class="m-4"><strong>Gender :</strong> {{ ucfirst($player->gender) }}</li>
                                <li class="m-4"><strong>DOB :</strong> {{ $player->date_of_birth }}</li>
                                <li class="m-4"><strong>Positions :</strong> @forelse($player->hasPositions as $data) {{$data->position->name.", "}} @empty {{ 'N/A' }} @endforelse</li>
                                <li class="m-4"><strong>Prefered Foot :</strong> {{ ucfirst($player->foot) }}</li>
                                <li class="m-4"><strong>Video Link :</strong> <a href="{{ $player->video_link }}" target="_blank">{{ $player->video_link }}</a></li>
                                <li class="m-4"><strong>Summary :</strong> {{ $player->summary }}</li>
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
                            <h3>EVALUATION</h3>
                        </div>
                        <div class="DescriptionContent">
                            <table class="table table-bordered table-condensed text-white">
                                <thead>
                                <tr>
                                    <th>Skills</th>
                                    <th>Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($player->evaluations) > 1)
                                    @foreach($activities as $activity)
                                        <tr data-toggle="collapse" data-target="#item-{{ $activity->id }}" id="activity-{{ $activity->id }}">
                                            <td colspan="2"><strong class="">{{ $activity->name }} <i class="far fa-caret-square-down ml-2"></i> </strong></td>

                                        </tr>
                                        @foreach($activity->skills as $skill)
                                            <tr id="item-{{ $activity->id }}" class="collapse {{($activity->id === 1) ? 'show' : ''}}">
                                                <td>{{ $skill->name }}</td>
                                                <td>
                                                    @foreach($scoreTexts as $text)
                                                        @if($player->evaluations[$skill->id - 1]->score_text_id == $text->id)
                                                            {{$text->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" class="text-center">{{"No Evaluation Available"}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td><strong class="text-primary">Rating Average</strong></td>
                                    <td><strong class="text-primary">{{ number_format($player->avgRating, 1) }} / 5</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- single player -->
@endsection
