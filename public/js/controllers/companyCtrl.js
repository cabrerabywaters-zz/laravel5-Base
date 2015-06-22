angular.module('CompanyCtrl', [])
    .controller('companyController', function ($scope, $http, Company) {
        // object to hold all the data for Companies
        $scope.Companies = {};

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

    });