<?php $timeStr = time() + (7 * 24 * 60 * 60) ;
$jsTimeStamp = '?version=v-'.$timeStr;

?>
<!--
chol 50
kenny 
soki 100
jinkwan 50
joon bak 50
yujn sa 50
free 100
-->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">
<title>SoftBall   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" >

    <link rel="stylesheet" href="addhome.css" />
    <script src="addhome.js"></script>
       <script>
addToHomescreen();
</script> 

</head>

<body ng-app="menuApp"  ng-controller="menuCtrl">

<header class="noprint">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">SoftBall</a>{{_mode}}-W:{{weeStr}} 
    <button ng-if="_mode == 'PLAYER' " type="button" class="btn btn-primary" ng-click="goToPage('NEW')">+ NEW </button>
     <button ng-if="_mode == 'GAMEVIEW' " type="button" class="btn btn-primary" ng-click="goToPage('PLAYER')">BACK </button>
     <a ng-if="_mode == 'GAMEVIEW' "  class="btn btn-primary"  href="javascript:window.print();">Print</a>

  </nav>
</header>

<div class="yesprint" ng-if="_mode == 'GAMEVIEW' ">

<?php
include 'gameview.php';
?>

</div>  

  <main role="main">      
    <br><br><br>

    <!-- Main jumbotron for a primary marketing message or call to action -->







<div class="container">



<!-- Modal -->
<div class="noprint" ng-if="_mode == 'CHECK' " >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Validation</h5>


      </div>
      <div class="modal-body">
        <p>Please type your Jersey number that you used for Registration</p>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jersey#</label>
        <div class="col-sm-10">
        <input ng-model="pinObj.val"  class="form-control" placeholder="27">
        </div>
        </div>
        <p ng-if="$scope._error_msg  != '' " ><font color=red>{{_error_msg}}</font></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" ng-click="goToPage('PLAYER')">CANCEL</button>
        <button type="button" class="btn btn-primary" ng-click="selectRec()">CONFIRM </button>
      </div>
    </div>
  </div>
</div>





<div class="noprint" ng-if="_mode != 'NEW' &&  _mode != 'MOD'  &&  _mode != 'GAMEVIEW'  "class="table-responsive">

    <h5>Soft Power</h5>
  <ul>
  <li><a target="_new" href="http://www.teamsideline.com/sites/plano/content/11466/Slow-Pitch-Softball">
    Plano site</a> 

    <br><a target="_new" href="https://rainoutline.com/search/dnis/9722102936" >Rainout Line</a>
    <!--a target="_new" href="https://www.amazon.com/Custom-Jersey-Personalize-Numbers-Colors/dp/B06VV918B7/ref=sr_1_1?ie=UTF8&amp;qid=1504232644&amp;sr=8-1&amp;keywords=team%2Bjerseys%2Bcustom%2Badult&amp;th=1&amp;psc=1">  Jersey </a-->

    <br><a href="https://www.google.com/maps/place/4525+Hedgcoxe+Rd,+Plano,+TX+75024/" _target="_new" >4525 Hedgcoxe Rd, Plano, TX 75024</a></li>
    <li>GameA:<font color=red size=4.5rem>{{_game1}}</font>p, GameB:<font color=red size=4.5rem>{{_game2}}</font>p</li>
  <li>Update your game plan until Monday night!
    <div ng-repeat="x in _g_schs " >

<span ng-if="weeStr  == x.tw ">{{x.d1}}-{{x.game}} /{{x.dstr}} {{x.dstr2}} </span>

  </div>

</li>
<!-- </li>   <font color=red>  G 5/21, R 4/2({{365*2}}}+ 100 )  <br>
  AB:{{_next_game2}}P, A:{{_next_game1 }}P [{{_next_game2 + _next_game1 }}P, ${{_next_game2 * 100 + _next_game1 *50}}]
</font></li> -->
  
  </ul>
  <p>
  


  




  </p>
  
  </div>


<div class="noprint" ng-if="_mode == 'PLAYER' ">
  <button type="button" class="btn btn-primary" ng-click="goToPage('SCH')">Game Schedule </button>  
  <!--a  href="print.php" target="_new" class="btn btn-primary" >Print Game View </a-->  
  <button type="button" class="btn btn-primary" ng-click="goToPage('GAMEVIEW')">GAME VIEW </button>  
  
  <table class="table table-striped">
  <thead>
  <tr>

  <th width=65%>Player</th>
  <th >GameA {{_game1}}명</th>
  <th >GameB {{_game2}}명</th>

  <th>Mod</th>
  </thead>
  <tbody>
  <tr ng-repeat="x in _users  " >

  <td>{{$index+1}}-{{x.c1}}/({{x.c5}}) <!--${{x.c19 * 50}}--> </td>

<td><span ng-if="x.c11 == 'YES' " ><img width=23px src="sball.jpeg">{{x.c15}} {{x.c13}} </span>   
<span ng-if="x.c11 == 'NO' " >N </span> 
</td>

<td><span ng-if="x.c12 == 'YES' " ><img width=23px  src="sball.jpeg">{{x.c16}} {{x.c14}} </span> 
<span ng-if="x.c12 == 'NO' " >N </span>   
</td>


  



  <td> <button type="button" class="btn btn-primary" ng-click="checkRec(x)">Mod</button> </td>
  </tr>
  </tbody>
  </table>


</div>

<div class="noprint" ng-if="_mode == 'SCH' ">
 <button type="button" class="btn btn-primary" ng-click="goToPage('PLAYER')">Go To Player List </button>  
 
  <table class="table table-striped">
  <thead>
  <tr>
  <th >Game1, Game2</th>
  <th >Game1</th>
  <th >Game2</th>
    </thead>
  <tbody>
  <tr ng-repeat="x in _g_schs " >

<td>{{x.d1}}-{{x.game}}  </td>
<td>{{x.dstr}}   </td>
<td>{{x.dstr2}}   </td>

  </tr>
  </tbody>
  </table>


</div>







<div class="noprint" ng-if="_mode == 'NEW' || _mode == 'MOD'  " class="table-responsive">

기본정보 선택해주신후 저장
  <p>
  <button ng-if=" _mode == 'MOD'  "  type="button" class="btn btn-primary" ng-click="updateRec(x)">Save(Update)</button>
  <button ng-if=" _mode == 'NEW'  "  type="button" class="btn btn-primary" ng-click="addRec()">+ Save(New)</button>
  <button type="button" class="btn btn-success" ng-click="goToPage('PLAYER')">CANCEL</button>

  </p>

  <form>




  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Name(ENG)</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c1"  class="form-control" placeholder="Jame Hong">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Name(KOR) </label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c2"  class="form-control" placeholder="홍길동">
    </div>
  </div>


   <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Phone</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c3"  class="form-control" placeholder="972-111-1111">
    </div>
  </div>



  <!--div class="form-group row">
    <label class="col-sm-2 col-form-label">* Jersey Size</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c6"  class="form-control" id="exampleFormControlSelect2">
        <option value="" >--Select Size--</option>
        <option >S</option>
        <option >M</option>
        <option >L</option>
        <option >XL</option>

      </select>
    </div>
  </div-->
<font color=red> Register for Summber Season</font>
  <!--div class="form-group row">
    <label class="col-sm-2 col-form-label">*<font color=red> Next Season Play?</font></label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c19"  class="form-control" >
        <option value=2>2-Play two games</option>
        <option value=1>1-Play only one game</option>
        <option value=0>0-Not able to join</option>

      </select>
    </div>
  </div-->

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Game1 Play?</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c11"  class="form-control" id="exampleFormControlSelect2">
        <option >YES</option>
        <option >NO</option>
        <option >TBD</option>
       </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Game2 Play?</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c12"  class="form-control" id="exampleFormControlSelect2">
        <option >YES</option>
        <option >NO</option>
        <option >TBD</option>
       </select>
    </div>
  </div>



<div ng-if="adminMode == true" >


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* G1 pos</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c13"  class="form-control" id="exampleFormControlSelect2">
        <option value="" >--Select--</option>
        <option >DH</option>
        <option >P</option>
        <option >C</option>
        <option >1B</option>
        <option >2B</option>
        <option >3B</option>
        <option >SS</option>
        <option >RF</option>
        <option >RC</option>
        <option >LC</option>
        <option >LF</option>
      </select>
    </div>
  </div>


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* G2 pos</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c14"  class="form-control" id="exampleFormControlSelect2">
        <option value="" >--Select--</option>
         <option >DH</option>
         <option >P</option>
        <option >C</option>
        <option >1B</option>
        <option >2B</option>
        <option >3B</option>
        <option >SS</option>
        <option >RF</option>
        <option >RC</option>
        <option >LC</option>
        <option >LF</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Game A Batting</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c15"  class="form-control" id="exampleFormControlSelect2">
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        <option >6</option>
        <option >7</option>
        <option >8</option>
        <option >9</option>
        <option >10</option>
        <option >11</option>
        <option >12</option>
        <option >13</option>
        <option >99</option>        
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">* GameB Batting</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c16"  class="form-control" id="exampleFormControlSelect2">
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        <option >6</option>
        <option >7</option>
        <option >8</option>
        <option >9</option>
        <option >10</option>
        <option >11</option>
        <option >12</option>
        <option >13</option>
        <option >99</option>         
      </select>
    </div>
  </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Original POS</label>
    <div class="col-sm-10">
      {{selObj.c7}} / {{selObj.c8}}
    </div>
  </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">* Jersey Number</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c5"  class="form-control" placeholder="99">
    </div>
  </div>

    <hr><br><br><br>
    <label class="col-sm-2 col-form-label">Full</label>
    <div class="col-sm-10">
       <div class="col-sm-10">
      <select  ng-model="selObj.c19"  class="form-control" >
        <option value=2>2-Full</option>
        <option value=1>1-Sub</option>

      </select>
    </div>

    
   <div ng-if="selObj.c5 == '12' " class="form-group row">



    <hr><br><br><br>
    <label class="col-sm-2 col-form-label">WEEK</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c20"  class="form-control" placeholder="99"><button ng-click="actionMgr('WEEK') "    >Update Week</button>
    </div>


        <label class="col-sm-2 col-form-label">RESET</label>
    <div class="col-sm-10">
      <button ng-click="actionMgr('RESET') "    >click here</button>
    </div>
  </div>


</div>



  </form>




</div>




</main>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="app.js<?php echo $jsTimeStamp ?>"></script>


<!--


<script src="js/directives/MainItem.js"></script-->

  </body>
</html>
