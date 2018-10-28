<!DOCTYPE html>
<html>
<title>SoftBall</title>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="../../dist/css/mobile-angular-ui-hover.min.css" />
    <link rel="stylesheet" href="../../dist/css/mobile-angular-ui-base.min.css" />
    <link rel="stylesheet" href="../../dist/css/mobile-angular-ui-desktop.min.css" />

	
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
    <script src="../../dist/js/mobile-angular-ui.min.js?v=1"></script>
    <!-- Required to use $touch, $swipe, $drag and $translate services -->
    <script src="../../dist/js/mobile-angular-ui.gestures.min.js"></script>

    <link rel="stylesheet" href="addhome.css" />
<script src="addhome.js"></script>
    
   <script>
addToHomescreen();
</script> 

    


</head>
<body>
<div ng-app="myApp" ng-controller="customersCtrl">


<style>
body{
  padding:10px;
}
.col{
  width:50%;
  float:left;
  padding-left:50px;
}
.col_a{
    float:left;
    width:100%;
    padding:60px 30px 30px 30px;



}
.table_a{

    width:90%;
    padding:20px;
    border-color: #000 !important;
    border-style: solid;
  font-size: 12px;
  border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
.table_h{
   width:80%;
   padding:5px;

  font-size: 13px;
}
.table>tfoot>tr>th {
    padding:5px !important;
}


</style>          


<!--a href="http://maps.google.com/?q=4525 Hedgcoxe Road Plano, TX, 75093" class="btn btn-lg btn-success btn-block" target="_new" class=""-->
<br><br>
<hr>
<?php
date_default_timezone_set('America/Chicago');
$dateStr = date("F j, Y");
?>




<div class=col>
<h4> [Game A]</h4>
<table class="table table_h">
<tr><th>Team</th><th>{{_game1_team}}</th></tr>
<tr><th></th><th>Home or Vitor</th></tr>
<tr><th>Manager</th><th>Rick Kim</th></tr>
</table>
<?php
include 'pa.php';
?>
</div>

<div class=col>
<h4> [Game B]</h4>
<table class="table table_h">
<tr><th>Team</th><th>{{_game2_team}}</th></tr>
<tr><th></th><th>Home or Vitor</th></tr>
<tr><th>Manager</th><th>Rick Kim</th></tr>
</table>
<?php
include 'pb.php';
?>
</div>


<script>

var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {

$scope.sorterFunc = function(rec){
    return parseInt(rec.c15) * 1;
};

$scope.sorterFunc2 = function(rec){
    return parseInt(rec.c16) * 1;
};

  $scope.getList = function() { 

    var dataObj = {mode_type:"LIST"};

    $http({
        method : "POST",url: 'action/',data: dataObj
    }).then(function mySuccess(response) {
        $scope.list = response.data.list;
        console.log( $scope._users);

        $scope._game1 = $scope._users.filter(function(value) { return value.c11 == 'YES' }).length;
        $scope._game2 = $scope._users.filter(function(value) { return value.c12 == 'YES' }).length;


    }, function myError(response) {
        
    });



  }

 $scope.getList();



});

</script>



</body>
</html>