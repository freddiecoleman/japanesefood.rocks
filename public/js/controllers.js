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

    japanApp.controller('SelectedCtrl', function($scope, selected) {

        $scope.selected = selected;

    });

    japanApp.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider.
                when('/ramen', {
                    templateUrl: 'partials/ramen.html',
                    controller: 'RamenCtrl'
                }).
                otherwise({
                    redirectTo: '/'
                });
        }]);

})();