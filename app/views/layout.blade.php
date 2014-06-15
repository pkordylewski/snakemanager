<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Snakemanager</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body role="document" style="padding-top: 50px;">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">SnakeManager</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ strpos(Route::currentRouteAction(), 'OverviewController') !== false ? 'active' : '' }}"><a href="/overview">Overview</a></li>
                        <li class="{{ strpos(Route::currentRouteAction(), 'SnakesController') !== false ? 'active' : '' }}"><a href="/snakes">Snakes</a></li>
                        <li class="{{ strpos(Route::currentRouteAction(), 'FeedingsController') !== false ? 'active' : '' }}"><a href="/feedings">Feedings</a></li>
                        <li class="{{ strpos(Route::currentRouteAction(), 'ShedsController') !== false ? 'active' : '' }}"><a href="/sheds">Sheds</a></li>
                        <li class="{{ strpos(Route::currentRouteAction(), 'WeightsController') !== false ? 'active' : '' }}"><a href="/weights">Weights</a></li>
                        <li class="{{ strpos(Route::currentRouteAction(), 'PairingsController') !== false ? 'active' : '' }}"><a href="/pairings">Pairings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" role="main">
            @yield('content')
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body>
</html>