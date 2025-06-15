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
        <form action="conform.php" method="post">
            <div class="form-group">
                <div class="form-name">名前：</div>
                    <input type="text" id="name" name="name">
                <div class="form-age">年齢：</div>
                    <input type="text" id="age" name="age">
                <div class="form-tel">電話番号：</div>
                    <input type="tel" id="tel" name="tel">
                <div class="form-email">メールアドレス：</div>
                    <input type="email" id="email" name="email">
                <div class="form-address">住所：</div>
                    <input type="text" id="address" name="address">
                <div class="form-question">質問：</div>
                    <input type="text" id="question" name="question">
                <div class="form-gender">性別：</div>
                    <select id="gender" name="gender">
                        <option value="male">男</option>
                        <option value="female">女</option>
                    </select>
                </div>
                <div class="form-submit">
                    <input type="submit" value="送信">
                </div>
            </div>
        </form>
    </main>
    <footer></footer>
</body>
</html>