 

 <style>

  
  .col_all{
    width:100%;
   }
  .col{
    width:90%;
    float:left;
    padding-left:50px;
  }

  .col_a{
      float:left;
      width:100%;
      padding:60px 30px 30px 30px;



  }


  .table_a{
      width:100%;
      padding:5px;
      border-color: #000 !important;
      border-style: solid;
    font-size: 13px;
    border-collapse: collapse;
  }

  table, th, td {
      border: 1px solid black;
  } 
  .table_h{
     width:100%;
     padding:5px;

    font-size: 13px;
  }
  .table>tfoot>tr>th {
      padding:5px !important;
  }

.batting{
  font-size: 14px;
  font-weight: bold;
}





@media print {


    @page {
        size: letter landscape;
        margin-top: 15px;
        margin-left: 0px;
        padding-left:0px;

    }




  .table_a{
      width:100%;
      padding:5px;
      border-color: #000 !important;
      border-style: solid;
    font-size: 12px;
    border-collapse: collapse;
  }

  table, th, td {
      border: 1px solid black;
  } 
  .table_h{
     width:100%;
     padding:5px;

    font-size: 13px;
  } 
  .noprint { display:none; }

  .table th {
      padding-top: 8px !important;
      padding-bottom: 8px !important;
  }


 .col{
    width:50%;
    float:left;

  }


/*  .table td, .table th {
      padding: 1px 5px 2px 10px !important;
      border-top: 1px solid #e9ecef;
  }*/
}


@media all {
  .page-break { display: none; }
}

@media print {
  .page-break { display: block; page-break-before: always; }
}


</style>    


<div class=col>
  <div class=col_all>
 <img src='planosoft.png'>[{{_game_date}}]

    <table class="table table_h">
    <tr>
      <th>Team</th><th>Circle Below</th><th>Manager</th>
    </tr>      
    <tr>
      <th>{{_game1_team}}</th>
      <th>Home or Vitor</th>
      <th>Sokki Kang</th>
    </tr>
    </table>

  </div>
  <div class=col_all>


    <table class="table table_a">
    <tr><th>&nbsp;</th><th>No</th><th>Pos</th><th width=50%>Player</th><th width=5%>Sub</th><th width=5%>Sub</th></tr>
    <tr   ng-if="rec.c11 == 'YES' "  ng-repeat="rec in _users  | orderBy:'+-c15':true ">
    <th class="batting">{{ rec.c15 | number }}.</th>
    <th>{{ rec.c5}}</th>
    <th>{{ rec.c13}}</th>
    <th>{{ rec.c1}}   </th>
    <th></th>
    <th></th>
    </tr>
    </table>
    {{_game_obj.dstr}}

   
  </div>
</div>

<div class=col>
    <div class=col_all>
    <img src='planosoft.png'>[{{_game_date}}]

    <table class="table table_h">
    <tr>
      <th width=33%>Team</th><th width=33%>Circle Below</th><th width=33%>Manager</th>
    </tr>      
    <tr>
      <th>{{_game2_team}}</th>
      <th>Home or Vitor</th>
      <th>Sokki Kang</th>
    </tr>
    </table>

  </div>
  <div class=col_all>

    <table class="table table_a">
    <tr><th>&nbsp;</th><th>No</th><th>Pos</th><th width=50%>Player</th><th width=5%>Sub</th><th width=5%>Sub</th></tr>
    <tr    ng-if="rec.c12 == 'YES' "  ng-repeat="rec in _users  | orderBy:'+-c16':true ">
    <th class="batting">{{ rec.c16 | number }}.</th>
    <th>{{ rec.c5}}</th>
    <th>{{ rec.c14}}</th>
    <th>{{ rec.c1}}</th>
    <th></th>
    <th></th>
    </tr>
    </table>
    {{_game_obj.dstr2}}
    


  </div>
</div>


