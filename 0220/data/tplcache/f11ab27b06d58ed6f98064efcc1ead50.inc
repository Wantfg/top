<li class="dropdown"> <a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a> <a href="#" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {dede:field name=typeid runphp="yes"}
              global $dsql;
              $sql = "SELECT id From `dede_arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 ";
              $row = $dsql->GetOne($sql);      
              @me=is_array($row)?'<span class="glyphicon glyphicon-menu-down btn-xs"></span>':'';
              {/dede:field}</a>
              <ul role="menu" {dede:field name=typeid runphp="yes"}
global $dsql;
$sql = "SELECT id From `#@__arctype` WHERE reid='@me' And ishidden<>1 order by sortrank asc limit 0, 100 ";
$row = $dsql->
                GetOne($sql);
                @me=is_array($row)?'class="dropdown-menu nav_small"':'style="display:none"';
                {/dede:field}
                >  
                
                
                {dede:channel type='son' noself='yes'}
                <li><a href="[field:typeurl/]">[field:typename/]</a></li>
                {/dede:channel}
              </ul>
            </li>