@extends('layouts.front')

@section('content')
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="frontTheam/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="frontTheam/css/style.css"> <!-- Resource style -->
    <section class="cd-products-comparison-table">


        <div class="cd-products-table">
            <div class="features">
                <div class="top-info">PLAYERS</div>
                <ul class="cd-features-list">
                    <li>NAME</li>
                    <li>PLAYER UID</li>
                    <li>FOOT</li>
                    <li>POSITION</li>
                    <li>RATING AVG</li>
                </ul>
            </div> <!-- .features -->

            <div class="cd-products-wrapper">
                <ul class="cd-products-columns">
                    <li class="product">
                        <div class="top-info">
                            <!-- <div class="check"></div> -->
                            <img height="100px" src="{{ ($userOne->player->avatar != '' ) ? '/storage/'. $userOne->player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="" title=" " class="img-responsive">
                            {{--                        <h3>{{ $userOne->first_name }} {{ $userOne->last_name }}</h3>--}}
                        </div> <!-- .top-info -->

                        <ul class="cd-features-list">
                            <li><h3>{{ $userOne->first_name }} {{ $userOne->last_name }}</h3></li>
                            <li>{{ $userOne->uuid }}</li>
                            <li>{{ ($userOne->player->foot != "") ? ucfirst($userOne->player->foot) : "N/A" }}</li>
                            <li>@forelse($userOne->player->hasPositions as $data) {{$data->position->name.", "}} @empty {{ 'N/A' }} @endforelse</li>
                            <li>{{ number_format($userOne->player->avgRating, 1) }} / 5</li>
                        </ul>
                    </li> <!-- .product -->

                    <li class="product">
                        <div class="top-info">
                            <!-- <div class="check"></div> -->
                            <img height="100px" src="{{ ($userTwo->player->avatar != '' ) ? '/storage/'. $userTwo->player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="" title=" " class="img-responsive">
                            {{--                        <h3>{{ $userTwo->first_name }} {{ $userTwo->last_name }}</h3>--}}
                        </div> <!-- .top-info -->

                        <ul class="cd-features-list">
                            <li><h3>{{ $userTwo->first_name }} {{ $userTwo->last_name }}</h3></li>
                            <li>{{ $userTwo->uuid }}</li>
                            <li>{{ ($userTwo->player->foot != "") ? ucfirst($userTwo->player->foot) : "N/A" }}</li>
                            <li>@forelse($userTwo->player->hasPositions as $data) {{$data->position->name.", "}} @empty {{ 'N/A' }} @endforelse</li>
                            <li>{{ number_format($userTwo->player->avgRating, 1) }} / 5</li>
                        </ul>
                    </li> <!-- .product -->

                    <li class="product">
                        <div class="top-info">
                            <!-- <div class="check"></div> -->
                            <img height="100px" src="{{ ($userThree->player->avatar != '' ) ? '/storage/'. $userThree->player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="" title=" " class="img-responsive">
                            {{--                        <h3>{{ $userOne->first_name }} {{ $userOne->last_name }}</h3>--}}
                        </div> <!-- .top-info -->

                        <ul class="cd-features-list">
                            <li><h3>{{ $userThree->first_name }} {{ $userThree->last_name }}</h3></li>
                            <li>{{ $userThree->uuid }}</li>
                            <li>{{ ($userThree->player->foot != "") ? ucfirst($userThree->player->foot) : "N/A" }}</li>
                            <li>@forelse($userThree->player->hasPositions as $data) {{$data->position->name.", "}} @empty {{ 'N/A' }} @endforelse</li>
                            <li>{{ number_format($userThree->player->avgRating, 1) }} / 5</li>
                        </ul>
                    </li> <!-- .product -->

                </ul> <!-- .cd-products-columns -->
            </div> <!-- .cd-products-wrapper -->

        </div> <!-- .cd-products-table -->
    </section> <!-- .cd-products-comparison-table -->
@endsection
