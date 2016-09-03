angular.module("app").service("postService", function ($http) {
    this.postService = function (data,url) {
        return $http.post('/' + url,data)
    }
});