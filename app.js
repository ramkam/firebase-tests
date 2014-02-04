
var urlFstoreRoot = 'https://blistering-fire-302.firebaseio.com';

angular.module("sampleApp", ["firebase"])
  .controller("SampleController", ["$scope", "$firebase", "$firebaseSimpleLogin",
    function($scope, $firebase, $firebaseSimpleLogin) {
      var ref = new Firebase(urlFstoreRoot+"/");
      $scope.auth = $firebaseSimpleLogin(ref);
    }
  ]);