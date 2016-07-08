<!DOCTYPE html>
<html lang="en" ng-app="demo">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kiedy ciasto?</title>

    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
      <script>
        angular.module("demo", []);
        demo.controller("demoCtrl", function($scope)
        {
            $scope.pokaz = false;
        });
    </script>
    <body ng-controller="demoCtrl">
      <script>
        var demo = angular.module("demo", []);
        demo.controller("demoCtrl", function($scope)
        {
            $scope.pokaz = false;
            $scope.msg = "Dodaj ciasto!";
            $scope.funkcja = function()
            {
               $scope.pokaz = !$scope.pokaz;
               if ($scope.msg == "Dodaj ciasto!")
                $scope.msg = "Anuluj dodawanie ciasta :(";
               else
                $scope.msg = "Dodaj ciasto!";
            }
        });
    </script>
<?php

$hostname = 'mysql.cba.pl';
$username = 'ciasteczko123';
$password = 'ciasteczko123';

try {
  $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
  echo 'Connected to database';
  }
catch(PDOException $e)
{
echo $e->getMessage();
}
?>


   <div class="container">
  <div class="row text-center">
    <div class="col-xs-12">
    <div class="header text-center"><h1>Jest dziś ciasto!</h1>
    <img src="http://simpleicon.com/wp-content/uploads/smile.png" class="photo"></div>
<div class="col-md-offset-5 col-md-2 col-xs-12">
          <button ng-click="funkcja()" class="btn btn-warning" ng-bind="msg"></button></div>
       <div id="formularz" ng-show="pokaz" class="col-md-offset-5 col-md-2 col-xs-12">

             <form name="form" role="form" method="post" action="wyslij.php" novalidate>
           <div class="form-group">
                <label for="name">Nazwa ciasta</label>
                <input type="text" id="name" placeholder="Wpisz nazwe ciasta" class="form-control" ng-model="cake.name" name="cName"            required=""><br/>
         <div ng-show="form.$submitted || form.cName.$touched">
             <div ng-show="form.cName.$error.required">Podaj nazwę ciasta, żebyśmy wiedzieli cóż pysznego na nas czeka!</div>
        
            </div>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" id="date" placeholder="Wybierz datę" class="form-control" ng-model="cake.date" name="cDate"          required=""><br/>
         <div ng-show="form.$submitted || form.cDate.$touched">
             <div ng-show="form.cDate.$error.required">Ale podaj datę! Chcesz nas zagłodzić?</div>
            </div>
            <div class="form-group">
                <label for="time">Godzina</label>
                <input type="time" id="time" placeholder="Określ godzinę" class="form-control" ng-model="cake.hour" name="cHour"            required=""><br/>
         <div ng-show="form.$submitted || form.cHour.$touched">
             <div ng-show="form.cHour.$error.required">Nie podałeś godziny! Skąd mamy wiedzieć, o której mamy wpaść?</div>
            </div>

   <div class="col-xs-12 text-center">
    <button type="submit" class="dodaj" ng-disabled="!form.$valid">Dodaj ciasto</button>
    </div>
       </form>
   </div>
   </div>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>