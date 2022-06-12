<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート</title>
<style>
table {border-collapse: collapse; border: 2px solid #95C300;}
th, td {border: 1px solid #95C300; padding: 5px 10px;}
th {background: #EBF4C9; text-align:center;}
td {width: 300px;}
</style>
</head>
<body>
<h1>アンケート</h1>
<form name="post.php" action="write.php" method="post">
<table>
<tr><th>氏名</th>
<td><input type="text" name="name" id="name" size="40" maxlength="20" placeholder="山田太郎" autofocus required></td></tr>
<tr><th>メールアドレス</th>
<td><input type="text" name="mail" id="mail" size="40" maxlength="40" placeholder="taro.yamada@gmail.com" autofocus required></td></tr>
<tr><th>週平均で何日出社していますか？</th><td><select name="office">
<option value="">以下の中から選択してください</option><option value="0日">0日</option><option value="1-2日">1-2日</option><option value="3-4日">3-4日</option><option value="5日">5日</option></select></td></tr>
<tr><th>週平均で何日飲み行ってますか？</th><td><select name="drink">
<option value="">以下の中から選択してください</option><option value="0-1日">0-1日</option><option value="2-3日">2-3日</option><option value="4-5日">4-5日</option><option value="6-7日">6-7日</option></select></td></tr>
<tr><th>平日は平均何時間寝ていますか？</th><td><select name="sleep">
<option value="">以下の中から選択してください</option><option value="3-5時間">3-5時間</option><option value="5-7時間">5-7時間</option><option value="7-9時間">7-9時間</option><option value="9時間以上">9時間以上</option></select></td></tr>

</table>
<input type="submit" value="送信" class="btn">
</form>
</body>
</html>