<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$queries = array();
	parse_str($_SERVER['QUERY_STRING'], $queries);

	
	if ($queries['sen']=233030) {
		console.log("vai enviar...2");
		$to_email = "felchs@gmail.com";
		$subject = "Curriculo";
		$body = $queries['body'];
		$headers = $queries['from'];
	 
		if ( mail($to_email, $subject, $body, $headers)) {
			echo("Email successfully sent to $to_email...");
		} else {
			echo("Email sending failed...");
		}
	}
	
//echo "ok"
?>
