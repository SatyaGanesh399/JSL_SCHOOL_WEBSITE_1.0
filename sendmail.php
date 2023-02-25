<?php
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$fields = [
		'fname' => 'First Name',
		'lname' => 'Last Name',
		'email' => 'Email',
		'phone' => 'Phone',
		'message' => 'Message'
	];

	foreach ($fields as $key => $value) {
		if (!isset($_POST[$key])) {
			echo json_encode(['status' => 'error', 'msg' => 'Needed parameters are not passed!']);
			return;
		}
	}

	$message = "<table cellpadding='5' cellspacing='5'>";

	foreach ($fields as $key => $value) {
		$message .= "<tr><td><b>{$value}:</b></td><td>{$_POST[$key]}</td></tr>";
	}

	$message .= "</table>";

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo json_encode(['status' => 'error', 'msg' => 'Not a valid email!']);
		return;
	}

	$to = 'karthikeyan@ansidhovi.com';
	$subject = 'Kothapet Edify - Online Form';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <' . $_POST['email'] . '>' . "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";

	if (!mail($to, $subject, $message, $headers)) {
		echo json_encode(['status' => 'error', 'msg' => 'Message not sent!']);
		return;
	} else {
		echo json_encode(['status' => 'ok', 'msg' => 'Message sent successfully!']);
		return;
	}
} else {
	echo json_encode(['status' => 'error', 'msg' => 'Access denied!']);
	return;
}
