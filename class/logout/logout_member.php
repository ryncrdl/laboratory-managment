<?php
session_start();

require_once "../config/config.php";

global $conn;
date_default_timezone_set('Asia/Manila');

$schoolId = $_SESSION['m_school_id'] ?? null; // Check if the session variable is set

if ($schoolId) {
	$today = date('m/d/y');

	// Check if the member has already logged in today
	$attendance_sql = $conn->prepare('SELECT * FROM attendance WHERE m_school_id = ? AND time_in LIKE ?');
	$attendance_sql->execute(array($schoolId, "$today%"));
	$attendance_record = $attendance_sql->fetch();

	if ($attendance_record) {
		// If they already have a time_in, update time_out with the current date and time
		$timeOut = new DateTime();
		$current_date_time_out = $timeOut->format('m/d/y h:i a');

		$sql = $conn->prepare('UPDATE attendance SET time_out = ? WHERE id = ?');
		$sql->execute(array($current_date_time_out, $attendance_record['id']));
	}
}

// End the session and redirect to login page
session_destroy();
header('Location: ../../member/login');
exit;
?>