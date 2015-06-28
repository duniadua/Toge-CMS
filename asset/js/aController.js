/* 
 * Controller For Backend
 */
var app = angular.module('tgApp', []);

app.controller('menuController', function($scope) {
    $scope.url = true;
    $scope.urlDirect = false;
    
    $scope.changeSwitch = function() {
        $scope.url = !$scope.url;
        $scope.urlDirect = !$scope.urlDirect;        
    };

});


