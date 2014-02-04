<html ng-app="sampleApp">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
    <script src="//cdn.firebase.com/js/client/1.0.2/firebase.js"></script>
    <script src="//cdn.firebase.com/js/simple-login/1.2.3/firebase-simple-login.js"></script>
    <script src="//cdn.firebase.com/libs/angularfire/0.6.0/angularfire.min.js"></script>
    <script src="app.js"></script>
  </head>
  <body ng-controller="SampleController">
    <div id="login">
      <span ng-show="auth.user">
        {{auth.user.name}} | <a href="#" ng-click="auth.$logout()">Logout</a>
      </span>
      <a href="#" ng-hide="auth.user" ng-click="auth.$login('github')">Login</a>
    </div>
  </body>
</html>