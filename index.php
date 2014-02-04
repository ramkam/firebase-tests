<html ng-app="myChatRoom">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
    <script src="//cdn.firebase.com/js/client/1.0.2/firebase.js"></script>
    <script src="//cdn.firebase.com/libs/angularfire/0.6.0/angularfire.min.js"></script>
    <script src="app.js"></script>
  </head>
  <body ng-controller="ChatController">
    <ul ng-repeat="message in messages">
      <li>{{message.from}}: {{message.content}}</li>
    </ul>
    <form ng-submit="addMessage();">
      <input type="text" ng-model="message"/>
      <input type="submit" value="Send Message"/>
    </form>
  </body>
</html>