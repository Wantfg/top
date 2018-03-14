<?php
$z[0]=Array("field","",250,269);
$z[0][4]=array();
$z[0][4]['name']="title";
$z[1]=Array("global","",270,296);
$z[1][4]=array();
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",336,365);
$z[2][4]=array();
$z[2][4]['name']="keywords";
$z[3]=Array("field","",404,462);
$z[3][4]=array();
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("include","",621,656);
$z[4][4]=array();
$z[4][4]['filename']="head.htm";
$z[5]=Array("field","",715,744);
$z[5][4]=array();
$z[5][4]['name']="position";
$z[6]=Array("channel"," <a href=\"[field:typeurl/]\">[field:typename/]</a> ",789,946);
$z[6][4]=array();
$z[6][4]['type']="son";
$z[6][4]['currentstyle']="<a href='~typelink~' class='hover'>~typename~</a>";
$z[7]=Array("field","",1017,1046);
$z[7][4]=array();
$z[7][4]['name']="typename";
$z[8]=Array("list","\n      <li>\n        <div class=\"date fl\">\n          <p>[field:pubdate function=\"MyDate('d',@me)\"/]</p>\n          <span>[field:pubdate function=\"MyDate('Y-m',@me)\"/]</span> </div>\n        <div class=\"list_right fr\"> <a href=\"[field:arcurl/]\">[field:title/]</a>\n          <p>[field:description function=\"cn_substr(@me,200)\"/]...</p>\n        </div>\n      </li>\n      ",1116,1517);
$z[8][4]=array();
$z[8][4]['pagesize']="5";
$z[9]=Array("pagelist","",1571,1637);
$z[9][4]=array();
$z[9][4]['listitem']="index,end,pre,next,pageno";
$z[9][4]['listsize']="5";
$z[10]=Array("include","",1703,1740);
$z[10][4]=array();
$z[10][4]['filename']="footer.htm";

?>