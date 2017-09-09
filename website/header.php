<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo do_html_title($the_title); ?></title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="wrap">
				<div id="header" align ="center" height="20" width="15">
				<h1>Dr.D.Venkata Subramanian</h1> </div>
				<div id="header" align="right">
				<p> Author Website</p>
			</div>
			<div id="navigation">
				<?php echo do_main_nav() ; ?>
			</div>
			<?php
ini_set('memory_limit','16M');
?>