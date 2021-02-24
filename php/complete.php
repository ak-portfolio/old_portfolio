<?php
session_start();

$name = $_SESSION['name'];
// $name = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($name,"JIS","UTF-8"))."?=";
unset($_SESSION['name']);

$email = $_SESSION['email'];
unset($_SESSION['email']);

$content = $_SESSION['content'];
unset($_SESSION['content']);

$subject = 'ポートフォリオお問い合わせ';
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
$mail->Username = 'orchis.mary@gmail.com';
$mail->Password = 'kfjjqdwh1';
$mail->setFrom($email);
$mail->AddAddress('orchis.mary@gmail.com');
$mail->addReplyTo($email);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = 'お名前:'.$name.'<br>メール:'.$email.'<br>内容:'.$content;
$mail->send();


// mb_internal_encoding("utf-8");
//
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
// 	$pname =$_POST['name'];
// 	$pname = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($pname,"JIS","UTF-8"))."?=";
// 	$pemail =$_POST['email'];
// 	$pcontent =$_POST['content'];
// 	$to ='orchis.mary@gmail.com';
// 	$subject ='お問い合わせフォーム';
// 	$subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,"JIS","UTF-8"))."?=";
// mb_language("japanese");
// mb_internal_encoding("UTF-8");
// require_once('../PHPMailer/PHPMailerAutoload.php');
//
//
// $mail = new PHPMailer;
// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->Port = '587';
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';
// $mail->Username = 	$to;
// $mail->Password = 'kfjjqdwh1';
// $mail->setFrom($_POST['email'],$name);
// $mail->AddAddress($to);
// $mail->addReplyTo($_POST['email'],$name);
// $mail->isHTML(true);
// $mail->Subject = $subject;
// $mail->Send();
// mail($to, $subject, $_POST['content'], $_POST['email']);
// }
// exit;
// メール送信など
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>完了 | お問い合わせフォーム</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="complete_container">
        <div class="complete_contact">
            <h1 class="complete_title">Contact</h1>
            <div class="complete__text">
                <p>サイト管理者にお問い合わせのメールを送信しました。</p>
                <a href="/"><img class="about-img home" src="https://img.icons8.com/office/100/000000/home-page.png"></a>
            </div>
        </div>
    </div>
</body>
</html>
