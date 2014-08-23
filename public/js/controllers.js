(function(){

    var japanApp = angular.module("japanApp", ['ngRoute']);

    japanApp.factory('selected', function() {
        return {}
    });

    japanApp.controller('FoodCtrl', function($scope, $location, $http, selected) {

        console.log($location.url());

        $http.get('api/v1'+$location.url()).success(function(data) {

            $scope.predicate = 'name';
            $scope.food = data;

            $scope.itemsPerPage = 12;
            $scope.currentPage = 0;

            angular.copy($scope.food[0], selected);

            $scope.select = function(food) {

                angular.copy(food, selected);

            };

            $scope.prevPage = function() {
                if ($scope.currentPage > 0) {
                    $scope.currentPage--;
                }
            };

            $scope.prevPageDisabled = function() {
                return $scope.currentPage === 0 ? "disabled" : "";
            };

            $scope.pageCount = function() {
                return Math.ceil($scope.food.length/$scope.itemsPerPage)-1;
            };

            $scope.nextPage = function() {
                if ($scope.currentPage < $scope.pageCount()) {
                    $scope.currentPage++;
                }
            };

            $scope.nextPageDisabled = function() {
                return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
            };

        });

    })
    .directive('pagination', function() {
        return {
            restrict: 'E',
            templateUrl: 'partials/pagination.html'
        };
    })
    .directive('topNav', function() {
        return {
            restrict: 'E',
            templateUrl: 'partials/navigation.html'
        };
    });

    japanApp.controller('NavCtrl', function($scope, $location) {

        $scope.getClass = function(path) {
            var cur_path = $location.path().substr(0, path.length);

            if (cur_path == path) {
                if($location.path().substr(0).length > 1 && path.length == 1 )
                    return "";
                else
                    return "active";
            } else {
                return "";
            }
        }

    });

    japanApp.controller('SelectedCtrl', function($scope, selected) {

        $scope.selected = selected;

    });

    japanApp.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider.
                when('/', {
                    templateUrl: 'partials/index.html',
                    controller: 'IndexCtrl'
                }).
                when('/ramen', {
                    templateUrl: 'partials/ramen.html',
                    controller: 'FoodCtrl'
                }).
                when('/udon', {
                    templateUrl: 'partials/udon.html',
                    controller: 'FoodCtrl'
                }).
                when('/sushi', {
                    templateUrl: 'partials/sushi.html',
                    controller: 'FoodCtrl'
                }).
                otherwise({
                    redirectTo: '/'
                });
        }]);

    japanApp.filter('offset', function() {
        return function(input, start) {
            start = parseInt(start, 10);
            return input.slice(start);
        };
    });

})();