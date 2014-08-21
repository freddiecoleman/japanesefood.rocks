<!DOCTYPE html>
<html lang="en" ng-app="japanApp">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>
  <script src="/js/controllers.js"></script>
  <script src="/components/angular-utils-pagination/dirPagination.js"></script>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="container">
      <div class="page-header">
          <div style="float:right;"><input type="text" class="form-control" placeholder="Search..." ng-model="searchBox"></div>
          <h1>Ramen <small>each city has its own flavour</small></h1>
      </div>
      <div class="row">
          <div class="col-md-6 city-list" ng-controller="FlavoursCtrl as flavour">
              <div class="row">
                  <div class="col-md-3" dir-paginate="flavour in flavours | itemsPerPage: 12 | filter:searchBox" ng-click="select(flavour)">
                      <div class="thumbnail">
                          <img ng-src="/images/thumbs/{{ flavour.thumbnail }}">
                          <div class="caption">
                              <h2>{{ flavour.name }}</h2>
                              <p>{{ flavour.city_id | number }}</p>

                          </div>
                      </div>
                  </div>
              </div>
              <dir-pagination-controls></dir-pagination-controls>
          </div>
          <div class="col-md-6">
              <div ng-controller="SelectedCtrl as info">
                  <table class="table">
                      <tr>
                          <td colspan="2">
                              <img data-ng-src="/images/pics/{{ selected.pic }}" ng-if="selected.pic" class="full-pic">
                          </td>
                      </tr>
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