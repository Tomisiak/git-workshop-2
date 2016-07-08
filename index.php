<!DOCTYPE html>
<html lang="en" ng-app="demo">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
    <title>Bootstrap 101 Template</title>

    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
  </head>
  <body ng-controller="demoCtrl">
      <script>
        var demo = angular.module("demo", []);
        demo.controller("demoCtrl", function($scope)
        {
            $scope.pokaz = false;
        });
    </script>
   <div class="container">
  <div class="row text-center">
    <div class="col-xs-12">
    <div class="header text-center"><h1>Jest dziś ciasto!</h1>
    <img src="http://simpleicon.com/wp-content/uploads/smile.png" class="photo"></div>
    <button ng-click="pokaz = !pokaz">Dodaje swe ciasto!</button>
       <div id="formularz" ng-show="pokaz">
       <form role="form">
           <div class="form-group">
                <label for="name">Nazwa ciasta</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" id="date">
            </div>
            <div class="form-group">
                <label for="time">Godzina</label>
                <input type="time" id="time" step="60">
            </div>

   <div class="col-xs-12 text-center">
    <button type="submit" class="dodaj">Dodaj ciasto</button>
    </div>
       </form>
       </div>
   </div>
   </div>
   </div>
   <div class="container">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>