angular.module('companyService', [])

    .factory('Company', function ($http) {

        return {
            // get all companies
            index: function () {
                return $http.get('/company');
            },

            // save a company (pass in company data)
            store: function (companyData) {

                return $http({
                    method: 'POST',
                    url: '/company',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    params: companyData
                });
            },

            // destroy a comment
            destroy: function (id) {
                return $http.delete('/api/comments/' + id);
            }
        }

    });