<?php
session_start();

require_once 'ContactValidator.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP', true, 400);
    exit();
}

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['content'] = $_POST['content'];

$validator = new ContactValidator($_POST);
$errors = $validator->validate();
if (!empty($errors)) {
  $uri = $_SERVER['HTTP_REFERER'];
    header("Location: ".$uri.'#contact');
    $_SESSION['errors'] = $errors;

    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認 | お問い合わせフォーム</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="confirm_container">
        <div class="confirm_contact">
            <h1 class="confirm_title">お問い合わせ確認</h1>
            <form action="complete.php" method="post">
              <p class="confirm__text">以下の内容で宜しければ送信をお願いします。</p>
                <div class="confirm confirm__name">
                    <p>お名前：<span class="fs16"><?php echo htmlspecialchars($_POST['name']); ?></span></p>
                </div>
                <div class="confirm confirm__email">
                    <p>E-Mail：<span class="fs16"><?php echo htmlspecialchars($_POST['email']); ?></span></p>
                </div>
                <div class="confirm confirm__content">
                    <p>内容：<span class="fs16"><?php echo nl2br(htmlspecialchars($_POST['content'])); ?></span></p>
                </div>

                <div class="confirm_btn">
                    <button type="button" onclick="location.href = '/#contact'">戻る</button>
                    <button type="submit">送信</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
