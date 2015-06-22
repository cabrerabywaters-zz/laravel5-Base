angular.module('CountryCtrl', [])
    .controller('countryController', function ($scope, $http, Country) {
        // object to hold all the data for Companies
        $scope.countries = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        /*
         |--------------------------------------------------------------------------
         |Get All Countries
         |--------------------------------------------------------------------------
         |
         */
        Country.index()
            .success(function (data) {
                $scope.countries = data;
                $scope.loading = false;
            });

    });