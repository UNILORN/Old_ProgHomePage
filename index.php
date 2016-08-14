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


      <div class="content-fixed">
        <div class="content-fixed-inner">
          <div class="content-fixed-image">
            <div class="content-fixed-image-inner">
              <div class="cont-fixed-image cont-image-1">

              </div>
            </div>
          </div>

          <div class="content-fixed-overview">
            <div class="content-fixed-title">
              <div class="content-fixed-title-inner">
                <h1>test</h1>
              </div>
            </div>
            <div class="content-fixed-func">
              <div class="content-fixed-func-inner">
                <ul>
                  <li>機能１</li>
                  <li>機能２</li>
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

      <div class="content-first">
        <h1>Contents</h1>
        <div class="content-first-inner">
          <?php
            Content("1","#","NewPHPTodoList");
            Content("2","#","KintetsuRailWayList");
            Content("3","#","PHPTodoList");
            Content("4","#","MusicHomePage");
            Content("5","#","RaspberryPI Sensor");
            Content("6","#","No Contents");
            Content("6","#","No Contents");
            Content("6","#","No Contents");
            Content("6","#","No Contents");
           ?>

        </div>
      </div>

      <div class="content-second">
        <div class="content-second-inner">

        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.box2fullWidth.js"></script>
  </body>
</html>
