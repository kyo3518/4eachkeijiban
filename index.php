<!DOCTYPE html>
<html lang="ja">

  <head>
   <meta charset="UTF-8">
   <title>4eachblog 掲示板</title>
   <img src="4eachblog_logo.jpg">
   <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
  <?php

   mb_internal_encoding("utf8");
   $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","root");
   $stmt = $pdo->query("select * from 4each_keijiban");   

  ?>
    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
         
    <main>
      <div class="left">
        <br><br>
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="A">
          <h2>入力フォーム</h2>
          <form method="post" action="insert.php">
          <div class="あ">
            <label>ハンドルネーム</label>
            <br>
            <textarea name="handlename" rows="1" cols="25"></textarea>
          </div>      
          <div class="い">
            <label>タイトル</label>
            <br>
            <textarea name="title" rows="1" cols="25"></textarea>
          </div>
          <div class="う">
            <label>コメント</label>
            <br>
            <textarea name="comments" rows="4" cols="40"></textarea>
          </div>     
          <div class="え">
            <input type="submit" class="submit" value="投稿する">
          </div>
        </div>

        <?php

         while ($row = $stmt->fetch()) {

          echo " <div class='B'> ";
          echo"<h3>".$row['title']."</h3>";
          echo " <div class='contents'> ";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo " </div> ";
          echo " </div> ";
         }

        ?>
      </div>

      <div class="right">
        <br><br>
        <h2>人気の記事</h2>
        <ul>
           <li>PHPオススメ本</li>
           <li>PHP MyAdminの使い方</li>
           <li>いま人気のエディタTop5</li>
           <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
           <li>インターノウス株式会社</li>
           <li>XAMPPのダウンロード</li>
           <li>Eclipseのダウンロード</li>
           <li>Bracketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
           <li>HTML</li>
           <li>PHP</li>
           <li>MySQL</li>
           <li>JavaScript</li>
        </ul>
      </div>
    </main>
  
    <footer>
      copyright internous | 4each blog is the one which provides A to Z about programming.
    </footer>
  </body>

</html>