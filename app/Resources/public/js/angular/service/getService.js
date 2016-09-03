angular.module("app").service("getService", function ($http) {
    this.getService = function (url) {
        return $http.get('/' + url)
    }
});