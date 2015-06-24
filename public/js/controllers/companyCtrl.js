angular.module('CompanyCtrl', [])
    .controller('companyController', function ($scope, $http, Company, Country) {
        // object to hold all the data for Companies
        $scope.companies = [];
        $scope.companyData = [];
        $scope.errors = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;




        $scope.myImage='';
        $scope.myCroppedImage='';
        $scope.img = "";


        var handleFileSelect=function(evt) {
            var file=evt.currentTarget.files[0];
            var reader = new FileReader();
            reader.onload = function (evt) {
                $scope.$apply(function($scope){
                    $scope.myImage=evt.target.result;
                });
            };
            reader.readAsDataURL(file);


        };

        $scope.getBase64Image =function (imgElem) {

            var canvas = document.createElement("canvas");
            canvas.width = imgElem.clientWidth;
            canvas.height = imgElem.clientHeight;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(imgElem, 0, 0);
            var dataURL = canvas.toDataURL("image/png");

            return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");

        };




        $scope.imgElem = document.getElementById('img');

        angular.element(document.querySelector('#fileInput')).on('change',handleFileSelect);



        $scope.transformBase64 = function (imgElem) {
            // imgElem must be on the same server otherwise a cross-origin error will be thrown "SECURITY_ERR: DOM Exception 18"
            var canvas = document.createElement("canvas");
            canvas.width = imgElem.clientWidth;
            canvas.height = imgElem.clientHeight;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(imgElem, 0, 0);
            var dataURL = canvas.toDataURL("image/png");
            return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
        }

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
            $scope.img=JSON.stringify($scope.transformBase64($scope.imgElem));


            Company.store($scope.companyData,$scope.img)
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