angular.module('CompanyCtrl', [])
    .controller('companyController', function ($scope, $http, Company, Country) {
        // object to hold all the data for Companies
        $scope.companies = [];
        $scope.companyData = [];
        $scope.errors = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;


        /*
         |--------------------------------------------------------------------------
         |Get Locations from google API
         |--------------------------------------------------------------------------
         |
         */

        $scope.getLocation = function (val) {
            return $http.get('http://maps.googleapis.com/maps/api/geocode/json', {
                params: {
                    address: val,
                    sensor: false
                }
            }).then(function (response) {
                return response.data.results.map(function (item) {

                    return item.formatted_address;
                });
            });
        };


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

        /*
         |--------------------------------------------------------------------------
         |Store Company
         |when the Submit button is Pressed
         |--------------------------------------------------------------------------
         |
         */


        $scope.submitCompany = function () {
            $scope.loading = true;

            Company.store($scope.companyData)
                .success(function (data) {

                    // if successful, we'll need to refresh the comment list
                    Company.index()
                        .success(function (getData) {
                            $scope.companies = getData;
                            $scope.loading = false;

                            //Delete the information sent
                            $scope.companyData = [];
                            $scope.errors ={};
                                $scope.collapsed = !$scope.collapsed;

                        });


                })
                .error(function (data) {
                    $scope.errors = data;
                    $scope.loading = false;
                });

        };


    });