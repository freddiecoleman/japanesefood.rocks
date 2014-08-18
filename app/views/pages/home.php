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

  <div style="height:30px;"></div>

  <div class="container">
    <div class="jumbotron">
        <h1>Cities of Japan</h1>
        <p>Info about the cities will be here.. you can order them and stuff... yeah AngularJS is kind of cool like that...</p>
      </div>
      <div class="row">
          <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Filter by name..." ng-model="cityName">
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <h3>Cities</h3>
              <table class="table" ng-controller="CitiesCtrl as city">
                  <tr>
                      <th>Pic</th>
                      <th ng-click="predicate='name'">Name</th>
                      <th ng-click="predicate='population'">Population</th>
                  </tr>
                  <tr ng-repeat="city in cities | orderBy:predicate | filter:cityName">
                      <td><img ng-src="/images/{{ city.thumbnail }}"></td>
                      <td>{{ city.name }}</td>
                      <td>{{ city.population | number }}</td>
                  </tr>
              </table>
          </div>
          <div class="col-md-6">
              <h3>Info</h3>

          </div>
      </div>


  </div>

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>