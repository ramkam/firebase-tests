
angular.module("sampleApp", ["firebase"])
  .factory("sampleService", ["$firebase", function($firebase) {
    var ref = new Firebase("https://blistering-fire-302.firebaseio.com/text");
    return $firebase(ref);
  }])
  .controller("SampleController", ["$scope", "sampleService",
    function($scope, service) {
      service.$bind($scope, "text");
    }
  ]);
