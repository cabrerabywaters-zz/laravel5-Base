(function () {

    var app = angular.module('CYB', []);



    app.controller("companyController", function ($scope, $http) {


        /*
         |--------------------------------------------------------------------------
         |Get professors
         |--------------------------------------------------------------------------
         |
         */

        $http.get('/professors/getall').success(function (professors, status, headers, config) {


                $scope.professors = professors;


            }
        ).error(function (professors, status, headers, config) {

                alert('error' + status);


            });


        /*
         |--------------------------------------------------------------------------
         | Add new professor
         |--------------------------------------------------------------------------
         |
         */

        $scope.addprofessor = function () {

            var professor = { rut: $scope.professorRut, first_name: $scope.professorName, last_name: $scope.professorLastName,
                mail: $scope.professorMail, second_name: $scope.professorSecondName,
                second_last_name: $scope.professorSecondLastName };

            //save it on the DB
            $http.post('../../professors', professor).success(function (professor) {

                    //push to the banks array
                    $scope.professors.push(professor);
                    $scope.collapsed = false;
                    eraseScope();


                }
            );


        };

        /*
         |--------------------------------------------------------------------------
         | Delete professor
         |--------------------------------------------------------------------------
         |
         */
        $scope.deleteprofessor = function (id) {


            //Delete from the DB

            $http.delete('/professors/' + id).success(function (professor) {

                    //Delete from the array
                    for (var i = 0; i < $scope.professors.length; i++)
                        if ($scope.professors[i].id && $scope.professors[i].id === id) {
                            $scope.professors.splice(i, 1);
                            break;
                        }

                }
            );
            //Erase the variables.
            eraseScope();


        };

        /*
         |--------------------------------------------------------------------------
         | Edit professor
         |--------------------------------------------------------------------------
         |
         */

        $scope.editprofessor = function (id, rut, name, lastName, secondName, secondLastName, mail) {
            $scope.professorRut = rut;
            $scope.professorName = name;
            $scope.professorLastName = lastName;
            $scope.professorSecondName =secondName;
            $scope.professorSecondLastName = secondLastName;
            $scope.professorMail = mail;
            $scope.id = id;

        };

        /*
         |--------------------------------------------------------------------------
         | Update Bank
         |--------------------------------------------------------------------------
         |
         */

        $scope.updateprofessor = function () {

            var id = $scope.id;
            $http.put('/professors/' + id, {rut: $scope.professorRut, first_name: $scope.professorName, last_name: $scope.professorLastName,
                mail: $scope.professorMail, second_name: $scope.professorSecondName,
                second_last_name: $scope.professorSecondLastName} ).success(function (professor) {

                    //Delete from the array
                    for (var i = 0; i < $scope.professors.length; i++)
                        if ($scope.professors[i].id && $scope.professors[i].id === id) {
                            $scope.professors.splice(i, 1);
                            break;
                        }

                    //push to the banks array
                    $scope.professors.push(professor);
                    eraseScope();

                }
            );


        };


    });

})();
