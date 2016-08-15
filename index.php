<?php
  require __DIR__."/function.php";
  require __DIR__."/cont_first.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>unilorn-programing</title>
    <meta name="name" content="content">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
    <?php
    #Responsiv Phone
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $terminal = ['iPhone','iPod','Android'];
    $flug = 0;

    for ($i = 0;$i < 3 ;$i++){
      if (strpos($ua,$terminal[$i])!==false){ $flug = 1;}
    }
    #PC
    if ($flug == 0){ echo '<link rel="stylesheet" href="top.css" media="screen" title="no title" charset="utf-8">'; }
    #Phone
    else { echo '<link rel="stylesheet" href="top_phone.css" media="screen" title="no title" charset="utf-8">'; }

     ?>
    <script src="script.js" type="text/javascript"></script>
  </head>
  <body>
    <header>
      <div class="header-image image-1"></div>
      <div class="header-image image-2"></div>
      <div class="header-image image-3"></div>
      <div class="header-logo">
        <div class="header-logo-2">
          <div class="image">
            <h1>Unilorn</h1>
            <p>Music&amp;Programing</p>
          </div>
        </div>
      </div>
    </header>

    <div class="page-content">
      <div class="page-profile">
        <div class="page-profile-inner">
          <h1>ようこそ</h1>
          <p>このサイトはUnilornが作成したWebAppを展示するサイトです。</p>
          <?php
            if($flug == 1){
              echo '<h4 style="color:#E57373">※このサイトはPCでの閲覧を想定して作成されています</h4>
                    <h4 style="color:#E57373">Javascriptにより想定外の挙動が起こる可能性がありますのでPCでの閲覧を推奨します。</h4>';
            }
           ?>
        </div>
      </div>

      <?php

      $list = array(array(
        'num' => 1,
        'url' => '#',
        'name' => 'NewPHPTodoList'
      ),array(
        'num' => 2,
        'url' => '#',
        'name' => 'KintetsuRailWayList'
      ),array(
        'num' => 3,
        'url' => '#',
        'name' => 'PHPTodoList'
      ),array(
        'num' => 4,
        'url' => '#',
        'name' => 'MusicHomePage'
      ),array(
        'num' => 5,
        'url' => '#',
        'name' => 'RaspberryPI Sensor'
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents'
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents'
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents'
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents'
      ));

      ContentFirst($list);

       ?>

      <div class="content-second">
        <div class="content-second-inner">

        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.box2fullWidth.js"></script>
  </body>
</html>
