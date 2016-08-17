<?php


function Content($num,$url,$text){
  $html = '
            <div class="content-box cont-image-'.$num.'">
              <input type="hidden" value="'.$num.'" />
              <a href="'.$url.'" class="content-box-inner">
                <div class="content-box-link"></div>
              </a>
              <div class="content-box-lay">
                <a href="#">'.$text.'</a>
              </div>
            </div>

  ';
  echo $html;
}

function ContentFixed($num,$text,$func){
  $html = '<div class="content-fixed content-fixed-num'.$num.'">
          <div class="content-fixed-inner">
            <div class="content-fixed-image">
              <div class="content-fixed-image-inner">
                <div class="cont-fixed-image cont-image-'.$num.'">

                </div>
              </div>
            </div>

            <div class="content-fixed-overview">
              <div class="content-fixed-title">
                <div class="content-fixed-title-inner">
                  <h3>'.$text.'</h3>
                </div>
              </div>
              <div class="content-fixed-func">
                <div class="content-fixed-func-inner">
                  <ul>
                    ';
              foreach ($func as $value) {
                  $html .= '<li>'.$value.'</li>';
              }
    $html .= '
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div class="content-fixed-description">
            <p>
              ここには説明が入ります。<br>
              まだコードが整えられてないため工事中です。<br>
              しばらくお待ちください。
            </p>
          </div>
        </div>
        ';
  echo $html;
}

function functext($list){
  foreach ($list as $value) {
    echo '<li><b>'.$value.'</b></li>';
  }
}

function ContentFirst($list){

  foreach ($list as $value) {
    ContentFixed($value['num'],$value['name'],$value["func"]);
  }

echo '
  <div class="content-first">
    <h3>Contents</h3>
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
