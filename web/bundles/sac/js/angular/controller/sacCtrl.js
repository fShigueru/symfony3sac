'use strict';
var appControllers = angular.module('appControllers', []);

appControllers.controller('SacCtrl', ['$scope','postService','config', function SacCtrl($scope,postService,config){
    $scope.blocoNumPedido = true;
    $scope.blocoChamado = false;
    $scope.blocoEmail = false;
    $scope.blocoNome = false;
    $scope.loader = false;
    //Verifica se o numero do pedido existe
    $scope.verificarNumeroPedido = function(numPedido) {
        $scope.blocoNumPedido = false;
        $scope.loader = true;
        if(numPedido){
            var data = {numPedido: numPedido};
            postService.postService(data,config.urlVerNumPedido).then(
                function(data){
                    if(!data.data.status){
                        alert(data.data.msg);
                    }else{
                        $scope.numPedido = numPedido;
                        $scope.blocoEmail = true;
                    }
                    $scope.blocoNumPedido = true;
                    $scope.loader = false;
                }
            );
        }
    };
    $scope.verificarClienteEmail = function(cliente) {
        $scope.nome = "";
        $scope.loader = true;
        if(cliente){
            var data = {cliente: cliente};
            postService.postService(data,config.urlVerClienteEmail).then(
                function(data){
                    if(data.data){
                        $scope.nome = data.data.nome;
                    }
                    $scope.blocoNome = true;
                    $scope.blocoChamado = true;
                    $scope.loader = false;
                }
            );
        }
    };
}]);
