angular.module('CompanyCtrl', [])
    .controller('companyController', function ($scope, $http, Company,Country) {
        // object to hold all the data for Companies
        $scope.companies = [];
        $scope.countries = [];

        // loading variable to show the spinning loading icon
        $scope.loading = true;



        /*
         |--------------------------------------------------------------------------
         |Get All Companies
         |--------------------------------------------------------------------------
         |
         */
        Company.index()
            .success(function (data) {
                $scope.companies = data;
                $scope.loading = false;
            });

        Country.index()
            .success(function (data) {
                $scope.countries = data;
                $scope.loading = false;
                $scope.selectedCountry = $scope.countries[0];
            });

    });