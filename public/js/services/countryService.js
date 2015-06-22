angular.module('countryService', [])

    .factory('Country', function ($http) {

        return {

            index: function () {
                return $http.get('/country');
            }


        }

    });