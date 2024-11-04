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

		date_default_timezone_set('Asia/Manila');

		$sql = $conn->prepare('SELECT * FROM member WHERE m_school_id = ? AND m_password = ? AND m_status = ?');
		$sql->execute(array($id, $m_password, 1));
		$count = $sql->rowCount();
		$fetch = $sql->fetch();

		if ($count > 0) {

			// Start session and set session variables
			session_start();
			$_SESSION['member_id'] = $fetch['id'];
			$_SESSION['member_name'] = $fetch['m_fname'] . " " . $fetch['m_lname'];
			$_SESSION['member_type'] = $fetch['m_type'];
			$_SESSION['m_school_id'] = $fetch['m_school_id'];

			// Format today's date in the format to match 'time_in'
			$today = date('m/d/y');

			// Check if attendance for today already exists
			$attendance_sql = $conn->prepare('SELECT * FROM attendance WHERE m_school_id = ? AND time_in LIKE ?');
			$attendance_sql->execute(array($fetch['m_school_id'], "$today%"));

			if ($attendance_sql->rowCount() == 0) {
				// No entry for today, so we insert a new attendance record
				$schoolId = $fetch['m_school_id'];
				$firstName = $fetch['m_fname'];
				$lastName = $fetch['m_lname'];
				$department = $fetch['m_department'];
				$yearSection = $fetch['m_year_section'];
				$type = $fetch['m_type'];

				$timeIn = new DateTime();
				$current_date_time = $timeIn->format('m/d/y h:i a');

				$timeOut = clone $timeIn;
				$timeOut->modify('+5 minutes');
				$current_date_time_out = $timeOut->format('m/d/y h:i a');

				$insert_sql = $conn->prepare('INSERT INTO attendance (m_school_id, m_fname, m_lname, m_type, m_department, year_section, time_in, time_out) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
				$insert_sql->execute(array($schoolId, $firstName, $lastName, $type, $department, $yearSection, $current_date_time, $current_date_time_out));
			}

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


		$minLength = 8;
		if (strlen($password) < $minLength) {
			echo '1';
			return;
		}

		$hasUppercase = preg_match('/[A-Z]/', $password);
		if (!$hasUppercase) {
			echo '2';
			return;
		}

		$hasLowercase = preg_match('/[a-z]/', $password);
		if (!$hasLowercase) {
			echo '3';
			return;
		}

		$hasSpecialChar = preg_match('/[\W]/', $password);
		if (!$hasSpecialChar) {
			echo '4';
			return;
		}

		if ($password !== $confirm_password) {
			echo '5';
			return;
		}

		$sql = $conn->prepare('UPDATE member SET m_password = ? WHERE m_school_id = ? AND m_email = ?');
		$sql->execute(array(md5($password), $id, $m_email));
		$row = $sql->rowCount();

		if ($row > 0) {
			echo '6';
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