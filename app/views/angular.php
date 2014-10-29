<!DOCTYPE html>
<html ng-app>
<head>
    <title>Simple app</title>
    <script
        src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
    </script>
</head>
<body>
 <div ng-controller='MyController'>
  <input ng-model="name" type="text" placeholder="Your name">
  <h1>Hello {{ name }} it's {{ clock }}</h1>
 </div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
Figure