var app = angular.module('menuApp', []);
app.controller('menuCtrl', function($scope, $http) {
  $scope._mode = 'PLAYER';
  $scope._error_msg = "";
  $scope.selObj = {c_id:0};
  $scope.pinObj = {val:""};
  $scope.adminMode = false;
  $scope._game1 = 0;
  $scope._game2 = 0;
$scope._next_game1 = 0;
$scope._next_game2 = 0;
  $scope._game1_team = "";   
  $scope._game2_team = ""; 
  $scope._game_date = ""; 
  $scope._game_obj = {};  
  
  $scope.dateT = new Date();
  $scope.numberDay = $scope.dateT.getDay();
  $scope.weeStr = "1";





  $scope.goToPage = function (pageStr) {
    if (pageStr == "MAIN"){document.location = "../";}
    if (pageStr == "NEW"){$scope.selObj = {c_id:0, c9:'YES'};}
    

    $scope._mode = pageStr;
  };

  $scope._schList = "N";
  $scope._users = [
  { "c1": "대구탕",  "c2": "채민호","c3": "Sr. SW Engineer(R,Computational)","c4":"1111111", "c5":"dfdf@dfd.com"  }

  ];

  $scope._g_schs = [

//     {id:1, tw:'19', d1:'5/24', game:'7PM(6F), 9PM(4F)', t1:'K Player', t2:'New Song', dstr:'7:00 PM  Mount Up  K Players Field 6',dstr2:'9:00 PM Prince of Peace New Song Church Field 4'},
//     {id:2, tw:'20', d1:'5/31', game:'8PM(4F), 9PM(6F)', t2:'K Player', t1:'New Song', dstr:'8:00 PM  New Song Church HGBC The Way  Field 4',dstr2:'9:00 PM K Players Blue Star Sports  Field 6 '},
//     //{id:3, tw:'21', d1:'6/7', game:'7PM(4F), 8PM(6F)', t1:'K Player', t1:'New Song', dstr:'7:00 PM  New Song Church CDR Blue  Field 4',dstr2:'8:00 PM Tigons  K Players Field 6'},
//     {id:4, tw:'22', d1:'6/14', game:'7PM(6F), 9PM(4F)', t1:'K Player', t2:'New Song', dstr:'7:00 PM D&L Easton  K Players Field 6',dstr2:'9:00 PM Life Point Lightning  New Song Church Field 4'},
//     {id:5, tw:'23', d1:'6/21', game:'7PM(4F), 8PM(6F)', t2:'K Player', t1:'New Song', dstr:'7:00 PM New Song Church KAOS  Field 4',dstr2:'8:00 PM K Players North Dallas Beaver Hunters Field 6'},
//     {id:6, tw:'24', d1:'6/28', game:'7PM(6F), 9PM(4F)', t1:'K Player', t2:'New Song', dstr:'7:00 PM K Players Mount Up  Field 6 ',dstr2:'9:00 PM  New Song Church Prince of Peace Field 4'},
//     {id:7, tw:'25', d1:'7/5', game:'8PM(4F), 9PM(6F)', t2:'K Player', t1:'New Song', dstr:'8:00 PM  HGBC The Way  New Song Church Field 4',dstr2:'9:00 PM Blue Star Sports  K Players Field 6'},
//     {id:9, tw:'27', d1:'7/26', game:'7PM(4F), 8PM(6F)', t2:'K Player', t1:'New Song', dstr:'7:00 PM New Song Church CDR Blue  Field 4',dstr2:'8:00 PM Tigons  K Players Field 6'},
//     {id:8, tw:'28', d1:'8/2', game:'7PM(4F), 8PM(6F)', t2:'K Player', t1:'New Song', dstr:'7:00 PM CDR Blue  New Song Church Field 4',dstr2:'8:00 PM K Players Tigons  Field 6'}   
// , {id:10, tw:'29', d1:'8/10', game:'Practice', t1:'K Player', t2:'K Player', dstr:'6:30-8PM Field 4',dstr2:'  '}
// , {id:11, tw:'30', d1:'8/10', game:'2018 fall Season', t1:'K Player',t2:'K Player',  dstr:'7:00PM CDR Blue F4',dstr2:'8:00 PM TBD  Field 6'}



, {id:51, tw:'51', d1:'8/23', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM Strikerz  K Players Field 7',dstr2:'9:00 PM LifePoint Thunder K Players Field 6'}
, {id:52, tw:'52', d1:'8/30', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Brokebat Mountain Field 7',dstr2:'9:00 PM K Players North Dallas Beaver Hunters Field 6'}
, {id:53, tw:'53', d1:'9/06', game:'Canceled', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Mounders  Field 6',dstr2:'9:00 PM Tigons  K Players Field 7'}
, {id:54, tw:'54', d1:'9/13', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM Mount Up  K Players Field 6',dstr2:'9:00 PM K Players Good Wood Field 7 '}
, {id:55, tw:'55', d1:'9/20', game:'Canceled', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Double S  Field 6',dstr2:'8:00 PM Double S  K Players Field 7 '}
, {id:56, tw:'56', d1:'9/27', game:'7PM 8PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Strikerz  Field 7',dstr2:'8:00 PM K Players LifePoint Thunder Field 6'}
, {id:57, tw:'57', d1:'10/4', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM Brokebat Mountain K Players Field 7',dstr2:'9:00 PM North Dallas Beaver Hunters K Players Field 6'}
, {id:58, tw:'58', d1:'10/11', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM Mounders  K Players Field 6',dstr2:'9:00 PM K Players Tigons  Field 7'}
, {id:53, tw:'59', d1:'10/18', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Mounders  Field 6',dstr2:'9:00 PM Tigons  K Players Field 7'}
, {id:55, tw:'60', d1:'10/25', game:'7PM 8PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Double S  Field 6',dstr2:'8:00 PM Double S  K Players Field 7 '}
, {id:53, tw:'61', d1:'11/01', game:'7PM 9PM', t1:'K Player',t2:'K Player',  dstr:'7:00 PM K Players Mounders  Field 6',dstr2:'9:00 PM Tigons  K Players Field 7'}


, {id:13, tw:'99', d1:'TBD', game:'Practice', t1:'K Player',t2:'K Player',  dstr:'7:30PM - 8PM',dstr2:''}
    



  ]



  $scope.getWeekNo = function() { 
    var d = new Date();
    var n = d.getDay();
    
    d.setHours(0,0,0);
    d.setDate(d.getDate()+(d.getDay()||7));
    var weekno =  Math.ceil((((d-new Date(d.getFullYear(),0,1))/8.64e7)+1)/7);

    if (n > 4){
      weekno = weekno + 1;
    }
    weekno = 12;

    return weekno;
  }

  $scope._thisw = $scope.getWeekNo() ;
  //alert($scope._thisw );

  $scope.goToSchedule = function(str) { 
  
    $scope._schList = str;

    //$scope._mode = 'MOD';
  }


  $scope.checkRec = function(rec) { 
  
    $scope._mode = 'CHECK';
    $scope._error_msg = "";
    $scope.selObj = rec;
    //$scope._mode = 'MOD';
  }

  $scope.selectRec = function() { 

    $scope.adminMode = false;
    var d = new Date();
    var n = d.getDay();

    if ( $scope.pinObj.val  == 1 ) { $scope.adminMode = true; }
    if (  n == 3 || n == 4){
      if ( !$scope.adminMode ){
        alert("Not able to update at this time! only Friday to Tuesday...please call admin.")
        return;
      }

    }

    if ( $scope.selObj.c5 == $scope.pinObj.val || $scope.pinObj.val  == 1){
      $scope._mode = 'MOD';
      $scope.pinObj.val = "";


    }else{
      $scope._error_msg = 'Invalid!, please check your email!';

    }

   
    
  }
  $scope.addRec = function() { 
    //console.log(rec);
    //$scope.selObj = {c_id:0};
    $scope.selObj.mode_type = "ADD";
   


     $http({
        method : "POST",url: 'action/',data: $scope.selObj
    }).then(function mySuccess(response) {
        $scope.goRefresh();

    }, function myError(response) {
        
    });

    
  }  
  $scope.updateRec = function() { 
    //console.log(rec);
    //$scope.selObj = rec;
    $scope.selObj.mode_type = "MOD";

     $http({
        method : "POST",url: 'action/',data: $scope.selObj
    }).then(function mySuccess(response) {
        $scope.goRefresh();
    }, function myError(response) {
        
    });

    
  }

  $scope.actionMgr = function(actType) { 
    //console.log(rec);
    //$scope.selObj = rec;
    $scope.selObj.mode_type = actType;
    dataObj = { act:actType};

     $http({
        method : "POST",url: 'action/',data: $scope.selObj
    }).then(function mySuccess(response) {
        $scope.goRefresh();
    }, function myError(response) {
        
    });

    
  }




  $scope.goRefresh = function() { 
    $scope.getList();
    $scope.goToPage ("PLAYER");
  }
  $scope.getList = function() { 

    var dataObj = {mode_type:"LIST"};

    $http({
        method : "POST",url: 'action/',data: dataObj
    }).then(function mySuccess(response) {
        $scope._users = response.data.list;
        console.log( $scope._users);

for (var key in $scope._users) {
     $scope.weeStr = $scope._users[key].c20;
   }



   

  for (var key in $scope._g_schs) {
    if( $scope.weeStr == $scope._g_schs[key].tw){
     $scope._game_date = $scope._g_schs[key].d1;
     $scope._game1_team = $scope._g_schs[key].t1;
     $scope._game2_team = $scope._g_schs[key].t2;

     $scope._game_obj = $scope._g_schs[key];
    }
 }



       // $scope.weeStr = $scope._users.filter(function(value) { return value.c5 == '12' }).length;

        $scope._game1 = $scope._users.filter(function(value) { return value.c11 == 'YES' }).length;
        $scope._game2 = $scope._users.filter(function(value) { return value.c12 == 'YES' }).length;
        $scope._next_game1 = $scope._users.filter(function(value) { return value.c19 == 1 }).length;
        $scope._next_game2 = $scope._users.filter(function(value) { return value.c19 == 2 }).length;


    }, function myError(response) {
        
    });



  }


$scope.getList();








});
