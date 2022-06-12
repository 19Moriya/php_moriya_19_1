<?php
function enc( $str, $charset ='UTF-8') {
  return htmlspecialchars($str, ENT_QUOTES, $charset);	} 

$file = 'data.txt'; 
$data = "".$_POST['name'].",".$_POST['mail'].",".$_POST['office'].",".$_POST['drink'].",".$_POST['sleep'].",";
$fp = fopen( $file, 'a' ); 
fwrite( $fp, $data. "\n" );
fclose ( $fp );?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>アンケート結果</title>
<style>
table {border-collapse: collapse; border: 2px solid #95C300;}
th, td {border: 1px solid #95C300; padding: 5px 10px;}
th {background: #EBF4C9; text-align:center;}
td {width: 300px;}
</style>
</head>
<body>
<h1>アンケート結果</h1><p>ご協力ありがとうございました。</p>
<table>
<tr><th>氏名</th><td><?php print (enc($_POST['name'])); ?></td></tr>
<tr><th>メールアドレス</th><td><?php print (enc($_POST['mail'])); ?></td></tr>
<tr><th>出社</th><td><?php print (enc($_POST['office'])); ?></td></tr>
<tr><th>飲み</th><td><?php print (enc($_POST['drink'])); ?></td></tr>
<tr><th>睡眠</th><td><?php print (enc($_POST['sleep'])); ?></td></tr>

</table>
<p><a href="read.php">アンケートの全体結果はこちら。</a></p>
</body>
</html>