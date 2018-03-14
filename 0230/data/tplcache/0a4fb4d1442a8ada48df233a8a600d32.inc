<li>
        <div class="date fl">
          <p>[field:pubdate function="MyDate('d',@me)"/]</p>
          <span>[field:pubdate function="MyDate('Y-m',@me)"/]</span> </div>
        <div class="list_right fr"> <a href="[field:arcurl/]">[field:title/]</a>
          <p>[field:description function="cn_substr(@me,200)"/]...</p>
        </div>
      </li>