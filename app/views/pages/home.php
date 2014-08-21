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
          <h1>Ramen <small>each city of Japan has its own unique flavour!</small></h1>
      </div>
      <div class="row">
          <div class="col-md-6 city-list" ng-controller="FlavoursCtrl as flavour">
              <div class="row">
                  <div class="col-md-3" dir-paginate="flavour in flavours | itemsPerPage: 12 | filter:searchBox" ng-click="select(flavour)">
                      <div class="thumbnail">
                          <img ng-src="/images/thumbs/{{ flavour.thumbnail }}" class="img-rounded">
                          <div class="caption ramen-thumb">
                              <h1>{{ flavour.name }}</h1>
                              <p><small>{{ flavour.city.name }}</small></p>
                          </div>
                      </div>
                  </div>
              </div>
              <dir-pagination-controls></dir-pagination-controls>
          </div>
          <div class="col-md-6">
              <div class="row" ng-controller="SelectedCtrl as info">
                  <div class="col-md-12">
                      <img data-ng-src="/images/pics/{{ selected.pic }}" ng-if="selected.pic" class="img-rounded full-pic">
                      <h1>{{ selected.name }} <small>{{ selected.city.name }}</small></h1>
                      <p>Text about this bad boy...</p>
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