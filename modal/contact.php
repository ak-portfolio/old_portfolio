<?php
mb_internal_encoding("utf-8");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name =$_POST['name'];
	$name = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($name,"JIS","UTF-8"))."?=";
	$email =$_POST['email'];
	$content =$_POST['content'];
	$to ='orchis.mary@gmail.com';
	$subject ='お問い合わせフォーム';
	$subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,"JIS","UTF-8"))."?=";
mb_language("japanese");
mb_internal_encoding("UTF-8");
require '../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 	$to;
$mail->Password = 'kfjjqdwh1';
$mail->setFrom($_POST['email'],$name);
$mail->AddAddress($to);
$mail->addReplyTo($_POST['email'],$name);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = {$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】
{$name}

【 メール 】
{$email}

【 内容 】
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。;



// 送信元のメールアドレスを変数fromEmailに格納
$fromEmail = "contact@dream-php-seminar.com";

// 送信元の名前を変数fromNameに格納
$fromName = "お問い合わせテスト";

// ヘッダ情報を変数headerに格納する
$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

mail($to, $subject, $_POST['body'], $_POST['email']);

// サンクスページに画面遷移させる
header("Location: http://testapp.hippy.jp/contact/thanks.php");
exit;
}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
<form action="confirm.php" method="post">
		<input type="hidden" name="name" value="<?php echo $name; ?>">
		<input type="hidden" name="email" value="<?php echo $email; ?>">
		<input type="hidden" name="content" value="<?php echo $content; ?>">
		<h1 class="contact-title">お問い合わせ 内容確認</h1>
		<p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
		<div>
				<div>
						<label>お名前</label>
						<p><?php echo $name; ?></p>
				</div>

				<div>
						<label>メールアドレス</label>
						<p><?php echo $email; ?></p>
				</div>

				<div>
						<label>お問い合わせ内容</label>
						<p><?php echo nl2br($content); ?></p>
				</div>
		</div>
<input type="button" value="内容を修正する" onclick="history.back(-1)">
<button type="submit" name="submit">送信する</button>
</form>
</div>
</body>
</html>
