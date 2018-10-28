
<table class="table table_a">
<tr><th>&nbsp;</th><th>No</th><th>Pos</th><th width=50%>Player</th><th width=5%>Sub</th><th width=5%>Sub</th></tr>
<tr    ng-if="rec.c12 == 'YES' "  ng-repeat="rec in list  | orderBy:'+-c16':true ">
<th>{{ rec.c16 | number }}</th>
<th>{{ rec.c5}}</th>
<th>{{ rec.c14}}</th>
<th>{{ rec.c1}}</th>
<th></th>
<th></th>
</tr>
</table>

