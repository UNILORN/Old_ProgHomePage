<?php
  require __DIR__."/function.php";
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
        'name' => 'NewPHPTodoList',
        'func' => array("アカウント管理","ログイン機能","検索機能","DB連携")
      ),array(
        'num' => 2,
        'url' => '#',
        'name' => 'KintetsuRailWayList',
        'func' => array("MaterialDesign","レスポンシブサイト")
      ),array(
        'num' => 3,
        'url' => '#',
        'name' => 'PHPTodoList',
        'func' => array("音声入力","リスト管理","ページング","DB連携")
      ),array(
        'num' => 4,
        'url' => '#',
        'name' => 'MusicHomePage',
        'func' => array("動画埋め込み")
      ),array(
        'num' => 5,
        'url' => '#',
        'name' => 'RaspberryPI Sensor',
        'func' => array("温度管理","サーバ構築")
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'func' => array("")
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'func' => array("")
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'func' => array("")
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'func' => array("")
      ));

      ContentFirst($list);

       ?>

      <div class="content-second">
        <h3>History</h3>
        <div class="content-second-inner">
          <table>
            <tr>
              <td class="time">2016-08-01</td>
              <td class="data">Homepage-Prototype</td>
            </tr>
            <tr>
              <td class="time">2016-08-30</td>
              <td class="data">Homepage-Relese</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="content-second">
        <h3>Contact</h3>
        <div class="content-second-inner">
          <table>
            <tr>
              <td class="mail">mail:</td>
              <td class="adress">yuoyun6427.yuniron.komoron⭐️gmail</td>
            </tr>
            <tr>
              <td class="mail">GitHub:</td>
              <td class="adress">https://github.com/UNILORN</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.box2fullWidth.js"></script>
  </body>
</html>
