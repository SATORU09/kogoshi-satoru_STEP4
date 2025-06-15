<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>test_step4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>フォーム入力</h1>
    </header>
    <main>
        <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
        <div class="form-data">
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                if(preg_match('/^[あ-んア-ンー-龠a-zA-Z]+$/', $name)){
                    echo "<p>名前:{$name}</p>";
                }else{
                    echo "<p>名前:ひらがな、カタカナ、漢字、英字のみ使用できます</p>";
                }
            } ?>
            <?php $input = $_POST['age'] ?? 0;

              if (filter_var($input, FILTER_VALIDATE_INT, [
              "options" => ["min_range" => 0, "max_range" => 150]
              ])) {
                  echo "<p>年齢:{$input}</p>";
                   } else {
                   echo "<p>年齢は0から150の間で入力してください。</p>";
              }
            ?>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $tel = $_POST['tel'];
                if(preg_match('/^[0-9]{1,4}-[0-9]{1,4}-[0-9]{3,4}$/', $tel)){
                    echo "<p>電話番号:{$tel}</p>";
                }else{
                    echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
                }
            } ?>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                if(preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)){
                    echo "<p>メールアドレス:{$email}</p>";
                }else{
                    echo "<p>メールアドレスの形式が正しくありません。</p>";
                }
            } ?>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $address = $_POST['address'];
                if(preg_match('/^[あ-んア-ン一-龠a-zA-Z]+$/', $address)){
                    echo "<p>住所:{$address}</p>";
                }else{
                    echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
                }
            } ?>
            <p>質問:<?php echo $_POST['question']; ?></p>
            <p>性別:<?php echo $_POST['gender']; ?></p>
        </div>
    </main>
    <footer></footer>
</body>
</html>