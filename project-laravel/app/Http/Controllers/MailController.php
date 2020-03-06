<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller
{
    public function __construct() {
		#code
    }
    
    public function mail() {
        
        $mail = new PHPMailer();

        $mail->isSMTP();
		$mail->Host = 'smtp.mailtrap.io';
		$mail->SMTPAuth = true;
		$mail->Username = 'cf18c407e3c056'; //ใส่ Username
		$mail->Password = '24c72d64cb012b'; //ใส่ Password
		$mail->SMTPSecure = 'tls';
        $mail->Port = 2525;
        $mail->CharSet = "UTF-8";
        
        //กำหนดชื่อผู้ส่ง
		$mail->setFrom('info@example.com', 'Someone');

		//กำหนดอีเมลที่อยู่ผู้รับ
        $mail->addAddress('xxxxxxxxxxxxxx@inbox.mailtrap.io');

		//หัวข้อ
		$mail->Subject = 'Laravel PHPMailer with Mailtrap';

		// Set email format to HTML
		$mail->isHTML(true);

		//ข้อความ
		$mail->Body = "สวัสดีครับทุกท่าน.";
		if(!$mail->send()) {
            echo 'ส่งเมลไม่สำเร็จ.';
            echo 'เกิดข้อผิดพลาด: ' . $mail->ErrorInfo;
        } else {
            echo 'ส่งเมลสำเร็จ.';
        }

        
    }
}





