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
<top-nav></top-nav>

<div ng-view></div>

<div class="footer">
    <div class="foot-container">
        <p class="text-muted">Built by <a href="http://freddiecoleman.com">Freddie Coleman</a>.</p>
    </div>
</div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>