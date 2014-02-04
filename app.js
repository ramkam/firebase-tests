angular.module("myChatRoom", ["firebase"])
  .factory("ChatService", ["$firebase", function($firebase) {
    var ref = new Firebase("https://blistering-fire-302.firebaseio.com/chat");
    return $firebase(ref);
  }])
  .controller("ChatController", ["$scope", "ChatService",
    function($scope, chatService) {
      $scope.user = "Guest " + Math.round(Math.random()*101);
      $scope.messages = chatService;
      $scope.addMessage = function() {
        $scope.messages.$add({from: $scope.user, content: $scope.message});
        $scope.message = "";
      };
    }
  ]);