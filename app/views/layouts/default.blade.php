<!DOCTYPE html>
<html lang="en" ng-app="japanApp">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>
  <script src="/js/controllers.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

  @include('layouts.partials.nav')

  <div class="container">
    @yield('content')
  </div>

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>