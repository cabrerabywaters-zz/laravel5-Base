angular.module('companyService', [])

    .factory('Company', function ($http) {

        return {
            // get all companies
            index: function () {
                return $http.get('/company');
            },

            // save a company (pass in company data)
            store: function (companyData, img) {

                return $http({
                    method: 'POST',
                    url: '/company',

                    params: companyData,
                    data: {"img": img}
                });
            },

            // destroy a comment
            destroy: function (id) {
                return $http.delete('/api/comments/' + id);
            }
        }

    });