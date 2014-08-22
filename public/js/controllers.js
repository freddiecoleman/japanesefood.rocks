(function(){

    var japanApp = angular.module("japanApp", ['ngRoute']);

    japanApp.factory('selected', function() {
        return {}
    });

    japanApp.controller('RamenCtrl', function($scope, $http, selected) {

        $http.get('api/v1/ramen').success(function(data) {

            $scope.predicate = 'name';
            $scope.ramen = data;

            angular.copy($scope.ramen[0], selected);

            $scope.select = function(ramen) {

                angular.copy(ramen, selected);

            };

        });

    });

    japanApp.controller('UdonCtrl', function($scope, $http, selected) {

        $http.get('api/v1/udon').success(function(data) {

            $scope.predicate = 'name';
            $scope.udon = data;

            angular.copy($scope.udon[0], selected);

            $scope.select = function(udon) {

                angular.copy(udon, selected);

            };

        });

    });

    japanApp.controller('SushiCtrl', function($scope, $http, selected) {

        $http.get('api/v1/sushi').success(function(data) {

            $scope.predicate = 'name';
            $scope.sushi = data;

            angular.copy($scope.sushi[0], selected);

            $scope.select = function(sushi) {

                angular.copy(sushi, selected);

            };

        });

    });

    japanApp.controller('NavCtrl', function($scope, $location) {

        $scope.getClass = function(path) {
            var cur_path = $location.path().substr(0, path.length);
            console.log(cur_path);
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
                    controller: 'RamenCtrl'
                }).
                when('/udon', {
                    templateUrl: 'partials/udon.html',
                    controller: 'UdonCtrl'
                }).
                when('/sushi', {
                    templateUrl: 'partials/sushi.html',
                    controller: 'SushiCtrl'
                }).
                otherwise({
                    redirectTo: '/'
                });
        }]);

})();