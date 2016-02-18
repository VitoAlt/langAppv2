//angular.module('sd', ['smart-table','lrDragNDrop'])
var app = angular.module('application');      
app.controller('mainCtrl', ['$scope', '$http', 
        function ($scope, $http) {

            $scope.isLoading = false;
            $scope.rowCollection = [];
            
            $http.get('http://localhost/testDB/ordDB.php')
                .success(function(data){ 
                $scope.read = data;
                })
                .error(function() {
                    $scope.read = "error in fetching data";
                });   
            function createRandomItem() {
                var 
                English = read.english,
                Wordtype = read.wordtype,
                Definition = read.definition,
                Swedish = read.swedish;
                 

                return {
                    English: English,
                    Wordtype: Wordtype,
                    Definition: Definition,
                    Swedish: Swedish,
                };
            }
            
            $scope.columns=[ 'English','Wordtype','Definition','Swedish'];
            
            for(var i=0;i<50;i++){
//              $scope.rowCollection.push(createRandomItem());
            }
                console.log($scope.rowCollection);
        }
    ]);


app.controller('ChildController', ['$scope', '$http', 
        function ($scope, $http) {

            $scope.isLoading = false;
            $scope.rowCollection = [];
            
            $http.get('http://localhost/testDB/ordDB.php')
                .success(function(data){ 
                $scope.readAZ = data;
                })
                .error(function() {
                    $scope.read = "error in fetching data";
                });               
            $scope.columns=[ 'English','Wordtype','Definition','Swedish'];

                console.log($scope.rowCollection);
        }
    ]);
