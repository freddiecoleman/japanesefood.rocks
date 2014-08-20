(function(){

    var japanApp = angular.module("japanApp", []);

    japanApp.factory('selected', function() {
        return {}
    });

    japanApp.controller('CitiesCtrl', function($scope, $http, selected) {

        $http.get('api/v1/cities').success(function(data) {

            $scope.predicate = 'name';
            $scope.cities = data;

            angular.copy($scope.cities[0], selected);

            $scope.select = function(city) {

                angular.copy(city, selected);

            };

        });

    });

    japanApp.controller('SelectedCtrl', function($scope, selected) {

        $scope.selected = selected;

    });

})();