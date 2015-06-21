angular.module('companyService', [])

    .factory('Company', function ($http) {

        return {
            // get all companies
            index: function () {
                return $http.get('/company');
            },

            // save a comment (pass in comment data)
            store: function (commentData) {
                return $http({
                    method: 'POST',
                    url: '/api/comments',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(commentData)
                });
            },

            // destroy a comment
            destroy: function (id) {
                return $http.delete('/api/comments/' + id);
            }
        }

    });