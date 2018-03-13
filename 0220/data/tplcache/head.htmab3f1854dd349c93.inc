<?php
$z[0]=Array("global","",169,195);
$z[0][4]=array();
$z[0][4]['name']="cfg_webname";
$z[1]=Array("global","",314,339);
$z[1][4]=array();
$z[1][4]['name']="cfg_cmsurl";
$z[2]=Array("channelartlist","\n            <li class=\"dropdown\"> <a href=\"{dede:field name='typeurl'/}\">{dede:field name='typename'/}</a> <a href=\"#\" id=\"app_menudown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> {dede:field name=typeid runphp=\"yes\"}\n              global \$dsql;\n              \$sql = \"SELECT id From `dede_arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 \";\n              \$row = \$dsql->GetOne(\$sql);      \n              @me=is_array(\$row)?'<span class=\"glyphicon glyphicon-menu-down btn-xs\"></span>':'';\n              {/dede:field}</a>\n              <ul role=\"menu\" {dede:field name=typeid runphp=\"yes\"}\nglobal \$dsql;\n\$sql = \"SELECT id From `#@__arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 \";\n\$row = \$dsql->\n                GetOne(\$sql);\n                @me=is_array(\$row)?'class=\"dropdown-menu nav_small\"':'style=\"display:none\"';\n                {/dede:field}\n                >  \n                \n                \n                {dede:channel type='son' noself='yes'}\n                <li><a href=\"[field:typeurl/]\">[field:typename/]</a></li>\n                {/dede:channel}\n              </ul>\n            </li>\n            ",1621,2889);
$z[2][4]=array();
$z[2][4]['typeid']="top";

?>