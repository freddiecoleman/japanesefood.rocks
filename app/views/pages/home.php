<!DOCTYPE html>
<html lang="en" ng-app="japanApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>
    <script src="/js/controllers.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Japanese Food</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Ramen</a></li>
                <li><a href="#">Sushi</a></li>
                <li><a href="#">Curry</a></li>
                <li><a href="#">Snacks</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="page-header">
        <div style="float:right;"><input type="text" class="form-control" placeholder="Search..." ng-model="searchBox">
        </div>
        <h1>Ramen
            <small>each city of Japan has its own unique flavour!</small>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-6 city-list" ng-controller="FlavoursCtrl as flavour">
            <div class="row">
                <div class="col-md-3" ng-repeat="flavour in flavours | limitTo: 12 | filter:searchBox"
                     ng-click="select(flavour)">
                    <div class="thumbnail">
                        <img ng-src="/images/thumbs/{{ flavour.thumbnail }}" class="img-rounded">

                        <div class="caption ramen-thumb">
                            <h1>{{ flavour.name }}</h1>

                            <p>
                                <small>{{ flavour.city.name }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" ng-controller="SelectedCtrl as info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img data-ng-src="/images/pics/{{ selected.pic }}" ng-if="selected.pic"
                         class="img-rounded full-pic">

                    <h1>{{ selected.name }}
                        <small>{{ selected.city.name }}</small>
                    </h1>
                    <p>{{ selected.description }}</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Buy now!</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>