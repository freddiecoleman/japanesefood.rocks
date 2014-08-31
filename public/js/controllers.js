(function(){

    var japanApp = angular.module("japanApp", ['ngRoute']);

    japanApp.factory('selected', function() {
        return {}
    });

    japanApp.controller('FoodCtrl', function($scope, $location, $http, selected) {

        $http.get('api/v1'+$location.url()).success(function(data) {

            $scope.predicate = 'name';

            $scope.food = data;

            $scope.categoryName = data[0].category.name;
            $scope.categoryIntro = data[0].category.intro;

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

    japanApp.controller('NavCtrl', function($scope, $location, $http) {

        $http.get('api/v1/navigation').success(function(data) {

            $scope.navigation = data;

        });

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

    japanApp.controller('IndexCtrl', function($scope, $http) {

        $http.get('api/v1/categories').success(function(data) {

            $scope.categories = data;

        });

    });

    japanApp.controller('SelectedCtrl', function($scope, selected) {

        $scope.selected = selected;

    });

    japanApp.controller('AdminCtrl', function($scope, $http) {

        $scope.data = {};

        $http.get('api/v1/navigation/root').success(function(data) {

            $scope.rootCategories = data;

        });

        $scope.submit = function() {

            $scope.data.parent = ($scope.data.parent == null) ? 0 : $scope.data.parent;

            $http.post('api/v1/categories', $scope.data).success(function() {

                alert('New category added!');

            });

        };

    });

    japanApp.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider.
                when('/', {
                    templateUrl: 'partials/index.html',
                    controller: 'IndexCtrl'
                }).
                when('/admin', {
                    templateUrl: 'partials/admin.html',
                    controller: 'AdminCtrl'
                }).
                when('/:name', {
                    templateUrl: 'partials/category.html',
                    controller: 'FoodCtrl'
                }).
                otherwise({
                    redirectTo: '/'
                });
        }]);

    japanApp.filter('offset', function() {
        return function(input, start) {
            start = parseInt(start, 10);
            return (start >=0 ) ? input.slice(start) : 0;
        };
    });

})();