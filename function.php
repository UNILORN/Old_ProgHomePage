<?php


function Content($num,$url,$text){
  $html = '
            <div class="content-box cont-image-'.$num.'">
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

 ?>
