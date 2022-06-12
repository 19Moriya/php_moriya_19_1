
<?php
$lines=@file("data.txt") or $result="ファイルが読めません";
if($lines != null){
    $result ='<table border="0">';
    $result.="<tr><th>NAME</th><th>MAIL</th><th>OFFICE</th><th>DRINK</th><th>SLEEP</th></tr>";
    for($i = 0;$i<count($lines);$i++){
        $result.="<tr>";
        $arr=explode(",",$lines[$i]);
        for($j=0;$j<5;$j++){
             $result.="<td>{$arr[$j]}</td>";}
        $result.="</tr>";}
    $result.="</table>";}?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケートの全体結果</title>
<style>
        h1{font-size:18pt;font-weight:bold;color:#666;}
        body{fontsize:13pt;color:#666;margin5px 25px;}
        tr{margin:5px;}
        th{padding:5px;color:white;background:darkgray;}
        td{padding:5px;color:black;background:#e0e0ff;}
</style>
</head>
<body>
<p><?php echo $result; ?></p>
</body>
</html>