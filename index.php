<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - A Pen by flipstewart</title>

  <meta name="robots" content="noindex">

  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

  <script src="js/modernizr.js"></script>

</head>

<body>

  <main ng-app="app" ng-cloak>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#auth">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">AngularFire Auth</a>
      </div>
      <form id="auth" class="navbar-form navbar-right collapse navbar-collapse" ng-controller="AuthCtrl">
        <fieldset ng-hide="auth.user">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="email" ng-model="email" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="password" ng-model="password" />
          </div>
          <button type="submit" class="btn btn-default" ng-click="signIn()">Sign In / Sign Up</button>
        </fieldset>
        <span ng-show="auth.user">
          {{auth.user.name}}
          <button type="submit" class="btn btn-default" ng-click="auth.$logout()">Sign Out</button>
        </span>
      </form>
      <p id="signed_in_as" class="navbar-text navbar-right" ng-show="auth.user">Signed in as {{auth.user.email}}</p>
    </div>
  </nav>

  <div class="container" ng-controller="AlertCtrl">
    <div class="alert alert-{{alert.class}}" ng-model="alert.message" ng-show="alert.message">
      {{alert.message}}
    </div>
  </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
<script src="https://cdn.firebase.com/v0/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/angularfire/0.5.0/angularfire.min.js"></script>
<script src='https://cdn.firebase.com/v0/firebase-simple-login.js'></script>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>