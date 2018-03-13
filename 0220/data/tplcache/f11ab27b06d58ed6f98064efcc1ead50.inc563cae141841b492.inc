<?php
$z[0]=Array("field","",31,59);
$z[0][4]=array();
$z[0][4]['name']="typeurl";
$z[1]=Array("field","",61,90);
$z[1][4]=array();
$z[1][4]['name']="typename";
$z[2]=Array("field","\n              global \$dsql;\n              \$sql = \"SELECT id From `dede_arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 \";\n              \$row = \$dsql->GetOne(\$sql);      \n              @me=is_array(\$row)?'<span class=\"glyphicon glyphicon-menu-down btn-xs\"></span>':'';\n              ",209,571);
$z[2][4]=array();
$z[2][4]['name']="typeid";
$z[2][4]['runphp']="yes";
$z[3]=Array("field","\nglobal \$dsql;\n\$sql = \"SELECT id From `#@__arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 \";\n\$row = \$dsql->\n                GetOne(\$sql);\n                @me=is_array(\$row)?'class=\"dropdown-menu nav_small\"':'style=\"display:none\"';\n                ",606,933);
$z[3][4]=array();
$z[3][4]['name']="typeid";
$z[3][4]['runphp']="yes";
$z[4]=Array("channel","\n                <li><a href=\"[field:typeurl/]\">[field:typename/]</a></li>\n                ",1004,1148);
$z[4][4]=array();
$z[4][4]['type']="son";
$z[4][4]['noself']="yes";

?>