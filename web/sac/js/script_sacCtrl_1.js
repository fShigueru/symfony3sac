'use strict';
var appControllers = angular.module('appControllers', []);

appControllers.controller('SacCtrl', ['$scope','$http', function SacCtrl($scope,$http){

    $scope.verificarNumeroPedido = function(numPedido) {
        console.log(numPedido);
    };

}]);
