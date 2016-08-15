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
              setumei
            </p>
          </div>
        </div>
        ';
  echo $html;
}

function functext($list){
  foreach ($list as $value) {
    echo '<li>'.$value.'</li>';
  }
}
 ?>
