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
          <h1>Welcome</h1>
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
                'time' => '2016-08-23',
                'data' => 'Function add [ Profile ]'
              ),
              array(
                'time' => '2016-08-20',
                'data' => 'Function add [ News ]'
              ),
              array(
                'time' => '2016-08-01',
                'data' => 'New Contents! 4 Items'
              ),
              array(
                'time' => '2016-08-01',
                'data' => 'Create [ Unilorn.com-Prototype ]'
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
        'imagetag' => 'content1',
        'func' => array("アカウント管理","ログイン機能","検索機能","DB連携"),
        'description' =>  "PHPTodoListからの強化版です。１から設計し直したためかなり仕様が変わっています。<br>
                          ログイン管理：新規登録後ログインし、ログインユーザごとに<br>
                          リスト管理されるようになっています。<br>
                          検索機能：曖昧検索、月日指定検索も可能です。<br>
                          [2016]で年。[07]で月。[07-14]で月日となります。<br>"
      ),array(
        'num' => 3,
        'url' => '../php_hoge/practice2.php',
        'name' => 'PHPTodoList',
        'color' => '#43A047',
        'imagetag' => 'content2',
        'func' => array("音声入力","リスト管理","ページング","DB連携"),
        'description' =>  "初todolistです。機能はかなり最低限で、DBからのデータをページングで表示します。<br>
                          追加の機能は、音声入力ができる点と音声によりリストを操作したりもできる機能です。<br>
                          「全部消して」と話すと今見えてるリスト内のデータを消去したり、<br>
                          「全部チェックして」と話すとすべてのチェックボックスにチェックを入れます。"
      ),array(
        'num' => 4,
        'url' => '../UNILORN_homepage',
        'name' => 'MusicHomePage',
        'color' => '#616161',
        'imagetag' => 'content3',
        'func' => array("動画埋め込み"),
        'description' => "趣味の作曲や、コラボ作品を主とするホームページです。<br>
                          まだ未完成で製作途中のホームページです。"
      ),array(
        'num' => 5,
        'url' => '#',
        'name' => 'RaspberryPI Sensor',
        'color' => '#E57373',
        'imagetag' => 'content5',
        'func' => array("温度管理","サーバ構築"),
        'description' => "Pythonによる制御で、室内の温度管理やエアコンの遠隔操作などを行いたいと思い製作しています。<br>
                          このサイトを製作している開発環境下ではRaspberryPIを仕様しています。<br>
                          その他開発を行う際は、RaspberryPI内で行っています。"
      ),array(
        'num' => 7,
        'url' => '#',
        'name' => 'ProgramHomePage',
        'color' => '#FFCCBC',
        'imagetag' => 'content6',
        'func' => array(""),
        'description' => "Coming soon..."
      ),array(
        'num' => 6,
        'url' => '#',
        'name' => 'No Contents',
        'color' => '#FF7043',
        'imagetag' => 'nocontent',
        'func' => array(""),
        'description' => "###工事中###"
      )
    );

      ContentFirst($contentlist);

       ?>

       <div class="content">
         <h3>Profile</h3>
         <div class="content-th-inner">
           <p>name : <span>Unilorn</span></p>
           <p>Age : <span>20</span></p>
           <p>Sex : <span>Man</span></p>
           <p>Job : <span>Student</span></p>
         </div>
       </div>

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

      <div class="content">
        <h3>This Site Concept</h3>
        <p>
          シンプルで色鮮やかなデザインをコンセプトに制作しました<br>
          実は使ってる写真は自分で撮りに行きました。<br>
          奈良県の「みたらい渓谷」という場所で、とても迫力のある緑豊かな渓谷です。<br>
          <br>
        </p>
      </div>
      <footer>
        <p>Copyright - 2106 unilorn.com</p>
      </footer>

    </div>

    <script type="text/javascript" src="js/jquery.box2fullWidth.js"></script>
  </body>
</html>
