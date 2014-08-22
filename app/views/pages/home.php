<!DOCTYPE html>
<html lang="en" ng-app="japanApp">
<head>
    <meta charset="UTF-8">
    <title>Japanese Food Rocks!</title>
    <script src="/js/lib/angular/angular.min.js"></script>
    <script src="/js/lib/angular-route/angular-route.min.js"></script>
    <script src="/js/controllers.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation" ng-controller="NavCtrl as navigation">
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
            <a class="navbar-brand" href="#">Japanese Food Rocks!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ng-class="getClass('/ramen')"><a href="/#/ramen">Ramen</a></li>
                <li ng-class="getClass('/udon')"><a href="/#/udon">Udon</a></li>
                <li ng-class="getClass('/sushi')"><a href="/#/sushi">Sushi</a></li>
                <li ng-class="getClass('/curry')"><a href="#">Curry</a></li>
                <li ng-class="getClass('/snacks')"><a href="#">Snacks</a></li>
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

<div ng-view></div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>