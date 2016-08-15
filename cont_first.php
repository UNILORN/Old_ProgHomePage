<?php

function ContentFirst($list){

  foreach ($list as $value) {
    ContentFixed($value['num'],$value['name'],$value["func"]);
  }

echo '
  <div class="content-first">
    <h1>Contents</h1>
    <div class="content-first-inner">
';

  foreach ($list as $value) {
    Content($value['num'],$value['url'],$value['name']);
  }
echo '
      </div>
    </div>
  ';
}

 ?>
