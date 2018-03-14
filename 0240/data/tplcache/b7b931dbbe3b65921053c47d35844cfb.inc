<li class="dropdown"><a href="{dede:field name='typeurl'/}" class="dropdown-toggle {dede:field.currentstyle/}" data-toggle="dropdown">{dede:field name='typename'/}</a><a href="#" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-menu-down btn-xs"></span></a>
            <ul class="dropdown-menu" role="menu">
              {dede:channel type='son' noself='yes'}
              <li><a href="[field:typeurl/]">[field:typename/]</a></li>
              {/dede:channel}
            </ul>
          </li>