<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="frontTheam/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="frontTheam/css/style.css"> <!-- Resource style -->

    <title>Products Comparison Table | CodyHouse</title>
    <!-- css -->
    <style type="text/css">

    </style>
</head>
<body>
<section class="cd-products-comparison-table">


    <div class="cd-products-table">
        <div class="features">
            <div class="top-info">PLAYERS</div>
            <ul class="cd-features-list">
                <li>PLAYER UID</li>
                <li>FOOT</li>
                <li>RATING AVG</li>
            </ul>
        </div> <!-- .features -->

        <div class="cd-products-wrapper">
            <ul class="cd-products-columns">
                <li class="product">
                    <div class="top-info">
                        <!-- <div class="check"></div> -->
                        <img height="100px" src="{{ ($userOne->player->avatar != '' ) ? '/storage/'. $userOne->player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="" title=" " class="img-responsive">
                        <h3>{{ $userOne->first_name }} {{ $userOne->last_name }}</h3>
                    </div> <!-- .top-info -->

                    <ul class="cd-features-list">
                        <li>{{ $userOne->uuid }}</li>
                        <li>{{ ($userOne->player->foot != "") ? ucfirst($userOne->player->foot) : "N/A" }}</li>
                        <li>100</li>
                    </ul>
                </li> <!-- .product -->

                <li class="product">
                    <div class="top-info">
                        <!-- <div class="check"></div> -->
                        <img height="100px" src="{{ ($userTwo->player->avatar != '' ) ? '/storage/'. $userTwo->player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" alt="" title=" " class="img-responsive">
                        <h3>{{ $userTwo->first_name }} {{ $userTwo->last_name }}</h3>
                    </div> <!-- .top-info -->

                    <ul class="cd-features-list">
                        <li>{{ $userTwo->uuid }}</li>
                        <li>{{ ($userTwo->player->foot != "") ? ucfirst($userTwo->player->foot) : "N/A" }}</li>
                        <li>100</li>
                    </ul>
                </li> <!-- .product -->

            </ul> <!-- .cd-products-columns -->
        </div> <!-- .cd-products-wrapper -->

    </div> <!-- .cd-products-table -->
</section> <!-- .cd-products-comparison-table -->
<!-- <script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> --> <!-- Resource jQuery -->
</body>
</html>
