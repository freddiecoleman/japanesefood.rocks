(function(){

    var japanApp = angular.module("japanApp", []);

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

})();