<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset=UTF-8">
<title>じゃんけんポン</title>
</head>
<body>
<h1>第11週 Webサイト構築（2）</h1>
<h3>課題１（１）</h3>
<?php
//勝った回数の管理
if(isset($_SESSION['win'])){
   $win = $_SESSION['win'];
   } else {
   $win = 0;
   }
//負けた回数の管理
if(isset($_SESSION['lose'])){
   $lose = $_SESSION['lose'];
   } else {
   $lose = 0;
   }
//あいこの回数の管理
if(isset($_SESSION['aiko'])){
   $aiko = $_SESSION['aiko'];
   } else {
   $aiko = 0;
   }
?>

<form action="kadai1result.php" method="post">
<p style="font-size:24px;">じゃんけん</p>
<p>
<input type="radio" name="janken" value="0">グー　
<input type="radio" name="janken" value="1">チョキ　
<input type="radio" name="janken" value="2">パー
</p>
<input type="submit" value="ぽん">
<input type="hidden" value=<?php echo $win; ?>  name="win">
<input type="hidden" value=<?php echo $lose; ?> name="lose">
<input type="hidden" value=<?php echo $aiko; ?> name="aiko">
</form>
<br>
<hr>
<hr>
<h3>課題１（２）</h3>
<form action="kadai1result2.php" method="post">
<p style="font-size:24px;">inputタグの様々な機能</p>
<p>複数選択可 ⇒ 
<input type="checkbox" name="Jump" value="Jump">Jump
<input type="checkbox" name="Go" value="Go">Go
<input type="checkbox" name="Warp" value="Warp">Warp
</p>
<p>色指定 ⇒ 
<input type="color" name="color" value="#ff0000">
</p>
<p>日付指定 ⇒ 
<input type="date" name="date">
</p>
<p>パスワード指定 ⇒ 
<input type="password" name="password">
</p>
<input type="submit" value="送信">
</form>
</body>
</html>
