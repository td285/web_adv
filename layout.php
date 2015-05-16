<?php

/* 
File: 		layout.php
Author:		Levi Meahan
Contains HTML blocks of layout
*/

$header = <<<HTML
<!doctype HTML public>
<html>
<head>
	<title>INVENTORY</title>
	<link rel='stylesheet' type='text/css' href='./stylesheet2.css' />
</head>
<body>
	<div id='container'>
		<div id='header'>
			<h2 style='text-align:center;'>INVENTORY</h2>
				<p style='text-align:center;'><a href='./index.php?view_cart=1'>View Cart</a></p>
		</div>
		<div id='content'>
HTML;

$footer = <<<HTML
		</div><!-- End content-->
	</div><!-- End container-->
</body>
</html>
HTML;

?>
