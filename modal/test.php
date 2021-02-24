<?php

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
$mail->setFrom('orchis.mary@gmail.com');
$mail->AddAddress('stapcabos@gmail.com');
$mail->addReplyTo('orchis.mary@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Hello World';
$mail->Body = 'A test email';
$mail->send();
if(!$mail->send()){
  echo '失敗';
}else{

echo '成功';

}
//
// try {
//   //Gmail 認証情報
//   $host = 'smtp.gmail.com';
//   $username = 'orchis.mary@gmail.com'; // example@gmail.com
//   $password = 'kfjjqdwh1';
//
//
//   //宛先
//   $to = 'orchis.mary@gmail.com';
//   $toname = 'カボス';
//   $from = 'orchis.mary@gmail.com';
//   $fromname = 'カボス';
//
//   //件名・本文
//   $subject = 'Hello World';
//   $body = 'A test email';
//
//   //メール設定
//   $mail->isSMTP();
//   $mail->SMTPDebug = 1;
//   $mail->SMTPAuth = true;
//   $mail->Host = $host;
//   $mail->Username = $username;
//   $mail->Password = $password;
//   $mail->SMTPSecure = 'ssl';
//   $mail->Port = 465;
//   // $mail->CharSet = "utf-8";
//   // $mail->Encoding = "base64";
//   $mail->setFrom($from);
//   $mail->addAddress($to);
//   $mail->Subject = $subject;
//   $mail->Body    = $body;
//
//   //メール送信
//   $mail->send();
//   echo '成功';
//
// } catch (Exception $e) {
//   echo '失敗: ', $mail->ErrorInfo;
// }


?>
