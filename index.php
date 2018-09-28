<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson_ryotaro;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    
    <header>
         <img class="headpic" src="4eachblog_logo.jpg">
        <ul class="header">
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
            <h2>プログラミングに役立つ掲示板</h2>
            <br>
            
            <div class="upside">
                <h4 class="newform">入力フォーム</h4><br>
                <form method="post" action="insert.php" size="50">
                <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" name="handlename" size="50">
                </div>

                <div>
                <label>タイトル</label>
                <br>
                <input type="text" name="title" size="50">
                </div>

                <div>
                <label>コメント</label>
                <br>
               <textarea name="comments" rows="10" cols="60" ></textarea>
                </div>

                <div>
                <input type="submit" class="submit" value="送信する">
                </div>
                </form>
            </div>
              
            
            <?php
            
            while($row = $stmt->fetch()){
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by".$row ['handlename']."</div>";
                echo"</div>";
                echo"</div>";
            }
        
            ?>
               
                 
        </div>
            
            
   
        
        <div class="right">
            <h3>人気の記事</h3>
            <ul>
                <li>PHP　オススメ本</li>
                <li>PHP　Myadminの使い方</li>
                <li>今人気のエディタ　TOP5</li>
                <li>HTMLの基礎</li>
            </ul>
            
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Ecripsのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>    
        </div>            
    </main>
    
    <footer>copywright(c)internous|4each blog is the one which provides A to Z about programming.</footer>
    
        
        
  
</body>

</html>