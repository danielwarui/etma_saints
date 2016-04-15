/**
 * Created by danielwarui on 4/6/2016.
 */
app.controller('mainController', ['$scope', '$http', function ($scope, $http) {
    /* base_url*/
    $scope.base_url = "http://localhost/etma_saints/";
    /*
     * Signup to ng-model directive
     * */
    $scope.hahaha = "my true bot";
    $scope.saintFirstName = "";
    $scope.saintMiddleName = "";
    $scope.saintLastName = "";
    $scope.saintAge = "";
    $scope.saintNumber = "";

    $scope.start_time = "";
    $scope.closing_time = "";
    $scope.age_group = "";
    $scope.venue = "";
    $scope.charges = "";

    $scope.enterValidation = function () {
        return true;
    };

    $scope.exitValidation = function () {
        return true;
    };
    //  example using context object
    $scope.exitValidation = function (context) {
        return context.firstName === "Jacob";
    };
    //  example using promises
    $scope.exitValidation = function () {
        var d = $q.defer();
        $timeout(function () {
            return d.resolve(true);
        }, 2000);
        return d.promise;
    };
    //Function executed for a merchant signup... url base_url()/signup
    $scope.SignupPost = function () {

        var data = {
            first_name: $scope.saintFirstName,
            middle_name: $scope.saintMiddleName,
            last_name: $scope.saintLastName,
            age: $scope.saintAge,
            number: $scope.saintNumber
        };
        $http.post($scope.base_url + "Saints/submit", data)
            .success(function (data, status) {
                console.log(data);
                // $scope.hello = data;
                // console.log(data.error + ' -- make');
                if (data.error == 'none') {
                    window.location = $scope.base_url + 'Saints';

                } else {
                    console.log("else")
                }

            }).error(function (data, status, header, config) {
            console.log(data + " \n " + status + " \n " + header + " \n " + config);

        });
    };
    $scope.EventsPost = function () {

        var data = {
            start: $scope.start_time,
            end: $scope.closing_time,
            target: $scope.age_group,
            location: $scope.venue,
            charge: $scope.charges
        };
        $http.post($scope.base_url + "Events/submit", data)
            .success(function (data, status) {
                console.log(data);
                // $scope.hello = data;
                // console.log(data.error + ' -- make');
                if (data.error == 'none') {
                    window.location = $scope.base_url + 'Saints';

                } else {
                    console.log("else")
                }

            }).error(function (data, status, header, config) {
            console.log(data + " \n " + status + " \n " + header + " \n " + config);

        });
    };

}]);

