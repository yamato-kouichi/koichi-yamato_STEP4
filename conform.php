<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>step4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>入力確認内容</h2>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $note = $_POST["note"];
        $gender = $_POST["gender"];

        if (!preg_match("/^[ぁ-ん ァ-ヶ a-zA-Z 一-龠]+$/u", $username)){
        
            echo "<p>名前は適切な文字及び半角英字で入力してください";
            
        }elseif(!is_numeric($age) || $age <= 0 || $age >= 150){

            echo "<p>年齢は０～１５０の間で入力をしてください</p>";

        }elseif(!preg_match("/^[0-9 -]{1,13}$/",$phone)){

            echo "<p>電話番号は半角数字とハイフンを使い入力してください</p>";

        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

            echo "このメールアドレスは正しくありません";

        }elseif(!preg_match("/^[ぁ-ん ァ-ヶ a-zA-Z 一-龠 0-9]+$/u", $address)){
            
            echo "<p>住所は適切な文字及び半角英数字で入力してください</p>";

        }else{

            echo "<p>名前:" .htmlspecialchars($username,ENT_QUOTES,'UTF-8') ."</p>";
            echo "<p>年齢:{$age}歳</p>";
            echo "<p>電話番号:".htmlspecialchars($phone,ENT_QUOTES,'UTF-8'). "</p>";
            echo "<p>メールアドレス:{$email}</p>";
            echo "<p>住所:" .htmlspecialchars($address,ENT_QUOTES,'UTF-8') ."</p>";
            echo "<p>質問:{$note}</p>";
            echo "<p>性別:{$gender}</p>";

    }

    }else{
        echo "<p>データがありません</p>";
    }
?>
    <a href="form.php">戻る</a>

</body>

</html>