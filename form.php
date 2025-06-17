<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>step4</title>
    <link rel="stylesheet" href="style.css">
    <ba>
</head>
<body>
    
<h1>フォームの入力</h1>
<form action="conform.php" method="post">
<div id="test1">
<br>
<label for="username">名前</label>
<input type="text" name="username"><br><br>

<label for="age">年齢</label>
<input type="number" name="age"><br><br>

<label for="phone">電話番号</label>
<input type="text" name="phone"><br><br>

<label for="email">メールアドレス</label>
<input type="text" name="email"><br><br>

<label for="address">住所</label>
<input type="text" name="address"><br><br>

<label for="note">質問</label>
<input type="text" name="note"><br><br>

<label for="gender">性別</label>
<select id="性別" name="gender">
    <option value="男性">男性</option>
    <option value="女性">女性</option>
    <option value="その他">その他</option>
    <option value="性別なし">性別なし</option>
</select>
<br><br>
<button class="test2" type="submit" value="送信">送信</button>
<br>
</div>
</form>
</body>
</html>

