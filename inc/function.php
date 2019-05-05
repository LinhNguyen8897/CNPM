<?php
function  smtpmailer($to,$from,$from_name,$subject,$body){
	      try {
               // smtpmailer('nguyenth@gmail.com','nguyenthimylinh881997@gmail.com','Send mail','Thông tin liên hệ',$noidung_lh);
                $mail = new PHPMailer(); // create a new object
                $mail->IsSMTP(); // enable SMTP
                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                //$mail->SMTPSecure = "ssl"; // secure transfer enabled REQUIRED for Gmail
                $mail->SMTPSecure = 'tls';
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587; // or 465 587
                $mail->IsHTML(true);
                $mail->Username = GUSER;
                $mail->Password = GPWD;
                $mail->CharSet = "UTF-8";
                // $mail->SetFrom($from,$from_name);
                $mail->SetFrom($from,$from_name);
                $mail->Subject ="Mail thông báo đăng ký thành công";
                $mail->Body = $body;
                $mail->AddAddress($to);
                $mail->Send();
                  } catch (Exception $e) {
                 print_r($e); die();
              }
}
