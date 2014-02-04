<html ng-app="sampleApp">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
    <script src="//cdn.firebase.com/js/client/1.0.2/firebase.js"></script>
    <script src="//cdn.firebase.com/libs/angularfire/0.6.0/angularfire.min.js"></script>
    <script src="app.js"></script>
  </head>
  <body ng-controller="SampleController">
    <input type="text" ng-model="text"/>
    <h1>You said: {{text}}</h1>
  </body>
</html>