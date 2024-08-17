<?php

require_once "../config/config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';

/**
 * 
 */
class login
{

	public function admin_login($username, $password)
	{
		global $conn;

		$sql = $conn->prepare('SELECT * FROM user WHERE BINARY username = ? AND BINARY password = ? AND status = ?');
		$sql->execute(array($username, $password, 1));
		$fetch = $sql->fetch();
		$count = $sql->rowCount();
		if ($count > 0) {

			session_start();
			$_SESSION['admin_id'] = $fetch['id'];
			$_SESSION['admin_name'] = $fetch['name'];
			$_SESSION['admin_username'] = $fetch['username'];
			$_SESSION['admin_type'] = $fetch['type'];
			echo "1";
		} else {
			echo "0";
		}
	}

	public function member_login($id, $m_password)
	{
		global $conn;

		$sql = $conn->prepare('SELECT * FROM member WHERE m_school_id = ? AND m_password = ? AND m_status = ?');
		$sql->execute(array($id, $m_password, 1));
		$count = $sql->rowCount();
		$fetch = $sql->fetch();

		if ($count > 0) {

			session_start();
			$_SESSION['member_id'] = $fetch['id'];
			$_SESSION['member_name'] = $fetch['m_fname'] . " " . $fetch['m_lname'];
			$_SESSION['member_type'] = $fetch['m_type'];
			echo "1";
		} else {
			echo "0";
		}

	}
	public function member_forgot_password($id, $m_email)
	{
		global $conn;

		$sql = $conn->prepare('SELECT * FROM member WHERE m_school_id = ? AND m_email = ? AND m_status = ?');
		$sql->execute(array($id, $m_email, 1));
		$count = $sql->rowCount();
		$fetch = $sql->fetch();

		if ($count > 0) {

			$verification_code = rand(100000, 999999);

			try {
				$mail = new PHPMailer(true);
				$mail->isSMTP();
				$mail->SMTPDebug = 0; // SMTP::DEBUG_SERVER;
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587; //465
				$mail->SMTPSecure = 'tls'; // PHPMailer::ENCRYPTION_SMTPS;
				$mail->SMTPAuth = true;
				$mail->Username = 'ryancordial2k22@gmail.com';
				$mail->Password = 'mwjy bhxa zzjk tmcb';
				$mail->setFrom('ryancordial2k22@gmail.com', 'PUP LABORATORY SYSTEM');
				$mail->addAddress($m_email);
				$mail->isHTML(true);
				$mail->Subject = 'Password Reset Verification Code';
				$mail->Body = 'Your verification code is: ' . $verification_code;
				// $mail->AltBody = '';

				if ($mail->send()) {
					session_start();
					$_SESSION['verification_code'] = $verification_code;
					$_SESSION['verification_email'] = $m_email;
					$_SESSION['user_id'] = $id;
					echo "1";
				} else {
					echo "0";
				}
			} catch (Exception $e) {
				echo "0";
			}
			// $_SESSION['member_name'] = $fetch['m_fname'] . " " . $fetch['m_lname'];
			// $_SESSION['member_type'] = $fetch['m_type'];
			// echo 1;
		} else {
			echo "0";
		}

	}
	public function member_verification($submitted_code)
	{
		session_start();
		$code = $_SESSION["verification_code"];
		if ($code == $submitted_code) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function member_changepassword($password, $confirm_password)
	{
		session_start();
		global $conn;
		$m_email = $_SESSION['verification_email'];
		$id = $_SESSION['user_id'];

		if ($password == $confirm_password) {
			$sql = $conn->prepare('UPDATE member SET m_password = ? WHERE m_school_id = ? AND m_email = ?');
			$sql->execute(array(md5($password), $id, $m_email));
			$row = $sql->rowCount();
			echo '1';
		} else {
			echo '0';
		}
	}

}

$login = new login();

$key = trim($_POST['key']);

switch ($key) {

	case 'admin_login';
		$username = trim($_POST['username']);
		$password = trim(md5($_POST['password']));
		$login->admin_login($username, $password);
		break;

	case 'member_login';
		$id = trim($_POST['id_number']);
		$m_password = trim(md5($_POST['m_password']));
		$login->member_login($id, $m_password);
		break;

	case 'member_forgot_password';
		$id = trim($_POST['id_number']);
		$m_email = trim($_POST['m_email']);
		$login->member_forgot_password($id, $m_email);
		break;

	case 'member_verification';
		$code = trim($_POST['code']);
		$login->member_verification($code);
		break;
	case 'member_changepassword';
		$password = trim($_POST['password']);
		$confirm_password = trim($_POST['confirm_password']);
		$login->member_changepassword($password, $confirm_password);
		break;

}

?>