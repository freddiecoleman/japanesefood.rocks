(function(){

    var japanApp = angular.module("japanApp", ['angularUtils.directives.dirPagination']);

    japanApp.factory('selected', function() {
        return {}
    });

    japanApp.controller('FlavoursCtrl', function($scope, $http, selected) {

        $http.get('api/v1/flavours').success(function(data) {

            $scope.predicate = 'name';
            $scope.flavours = data;

            angular.copy($scope.flavours[0], selected);

            $scope.select = function(flavour) {

                angular.copy(flavour, selected);

            };

        });

    });

    japanApp.controller('SelectedCtrl', function($scope, selected) {

        $scope.selected = selected;

    });

})();