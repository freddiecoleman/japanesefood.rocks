(function(){

    var japanApp = angular.module("japanApp", []);

    japanApp.controller('CitiesCtrl', function($scope, $http) {

        $http.get('api/v1/cities').success(function(data) {

            $scope.predicate = 'name';
            $scope.cities = data;

        });

    });

})();