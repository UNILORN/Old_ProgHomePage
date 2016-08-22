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

      <div class="content">
        <h3>News</h3>
        <div class="content-sec-inner">
          <table>
            <?php

            $newslist = array(
              array(
                'time' => '2016-08-20',
                'data' => 'Function add [ News ]'
              ),
              array(
                'time' => '2016-08-01',
                'data' => 'New Contents! 5 Items'
              ),
              array(
                'time' => '2016-07-20',
                'data' => 'Create Domain [ Unilorn.com ]'
              ),
              array(
                'time' => '2016-07-20',
                'data' => 'Server Start!'
              )
            );

            news($newslist);

             ?>
          </table>
        </div>
      </div>

      <?php

      $contentlist = array(array(
        'num' => 1,
        'url' => '../todo_vuejs',
        'name' => 'NewPHPTodoList',
        'color' => '#2E7D32',
        'func' => array("アカウント管理","ログイン機能","検索機能","DB連携"),
        'description' => ""
      ),array(
        'num' => 2,
        'url' => '../html_practice',
        'name' => 'KintetsuRailWayList',
        'color' => '#7E57C2',
        'func' => array("MaterialDesign","レスポンシブサイト"),
        'description' => ""
      ),array(
        'num' => 3,
        'url' => '../php_hoge/practice2.php',
        'name' => 'PHPTodoList',
        'color' => '#43A047',
        'func' => array("音声入力","リスト管理","ページング","DB連携"),
        'description' => ""
      ),array(
        'num' => 4,
        'url' => '../UNILORN_homepage',
        'name' => 'MusicHomePage',
        'color' => '#616161',
        'func' => array("動画埋め込み"),
        'description' => ""
      ),array(
        'num' => 5,
        'url' => '#',
        'name' => 'RaspberryPI Sensor',
        'color' => '#E57373',
        'func' => array("温度管理","サーバ構築"),
        'description' => ""
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'color' => '#FF7043',
        'func' => array(""),
        'description' => ""
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'color' => '#FF7043',
        'func' => array(""),
        'description' => ""
      )
    );

      ContentFirst($contentlist);

       ?>



      <div class="content">
        <h3>Contact</h3>
        <div class="content-sec-inner">
          <table>
            <tr>
              <td class="mail">mail:</td>
              <td class="adress">yuoyun6427.yuniron.komoron⭐️gmail</td>
            </tr>
            <tr>
              <td class="mail">GitHub:</td>
              <td class="adress">
                <a href="https://github.com/UNILORN">https://github.com/UNILORN</a>
              </td>
            </tr>
            <tr>
              <td class="mail">Twitter:</td>
              <td class="adress">
                <a href="https://twitter.com/yuuiro_1552">@yuuiro_1552</a>
              </td>
            </tr>
            <tr>
              <td class="mail">niconico:</td>
              <td class="adress">
                <a href="http://www.nicovideo.jp/user/6282195">user/6282195</a>
              </td>
            </tr>
            <tr>
              <td class="mail">TMbox:</td>
              <td class="adress">
                <a href="http://tmbox.net/user/yuuiro_1552/sound">tmbox.net/yuuiro_1552</a>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <footer>
        <p>Copyright-2106 unilorn.com</p>
      </footer>

    </div>

    <script type="text/javascript" src="js/jquery.box2fullWidth.js"></script>
  </body>
</html>
