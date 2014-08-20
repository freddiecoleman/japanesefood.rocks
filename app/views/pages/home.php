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

  <div style="height:30px;"></div>

  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Search..." ng-model="searchBox">
          </div>
      </div>
      <div class="row">
          <div class="col-md-5 city-list">
              <h3>Flavours</h3>
              <table class="table" ng-controller="FlavoursCtrl as flavour">
                  <tr>
                      <th>Pic</th>
                      <th ng-click="predicate='name'">Flavour</th>
                      <th ng-click="predicate='city'">City</th>
                  </tr>
                  <tr ng-repeat="flavour in flavours | orderBy:predicate | filter:searchBox" ng-click="select(flavour)">
                      <td><img ng-src="/images/{{ flavour.thumbnail }}"></td>
                      <td>{{ flavour.name }}</td>
                      <td>{{ flavour.city_id | number }}</td>
                  </tr>
              </table>
          </div>
          <div class="col-md-7">
              <h3>Info</h3>
              <div ng-controller="SelectedCtrl as info">
                  <table class="table">
                      <td>
                        <td colspan="2">
                          <img ng-src="/images/{{ selected.pic }}">
                        </td>
                      </td>
                      <tr>
                          <td>Name</td>
                          <td>{{ selected.name }}</td>
                      </tr>
                      <tr>
                          <td>City</td>
                          <td>{{ selected.city_id }}</td>
                      </tr>
                  </table>
              </div>
          </div>
      </div>


  </div>

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>