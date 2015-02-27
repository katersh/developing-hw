<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pwd = '';
	$database = 'quotes';
	$table = 'quotes';
	if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");
	if (!mysql_select_db($database))
	    die("Can't select database");

	// sending query
	$result = mysql_query("SELECT quote FROM quotes WHERE id='1'");
	$result2 = mysql_query("SELECT author FROM quotes WHERE id='1'");
	$result3 = mysql_query("SELECT quote FROM quotes WHERE id='2'")
	$result4 = mysql_query("SELECT author FROM quotes WHERE id='2'")
	if (!$result || !$result2 || !$result3 || !$result4) {
	    die("blja");
	}

	$fields_num = mysql_num_fields($result);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log in</title>
		<link rel="stylesheet" href="bootstrap.css" media="screen">
    	<link rel="stylesheet" href="bootswatch.min.css">
    	<link rel="stylesheet" href="style.css">
    	<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script language="JavaScript" type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<video autoplay loop poster="background.jpg" id="bgvid">
			<source src="video.webm" type="video/webm">
			<source src="video.mp4" type="video/mp4">
		</video>
		<div style="text-align: center;" class="container">
			<div class="clickfirst">
			<!--h1 class="firstquote">All cities are mad: but the madness is gallant. All cities are beautiful, but the beauty is grim.</h1>
			<h6>Christopher Morley</h6-->
			<?php
				while($row = mysql_fetch_row($result))
					{
					    foreach($row as $cell)
					        echo "<h1 class='firstquote'>$cell</h1>";

					}
				while($row2 = mysql_fetch_row($result2))
					{
						foreach ($row2 as $cell2) {
							echo "<h6>$cell2</h6>";
						}
					}
			?>
			</div>
			<div class="clicksecond">
			<!--h1 class="firstquote">All cities are mad: but the madness is gallant. All cities are beautiful, but the beauty is grim.</h1>
			<h6>Christopher Morley</h6-->
			<?php
				while($row3 = mysql_fetch_row($result3))
					{
					    foreach($row3 as $cell3)
					        echo "<h1 class='secondquote'>$cell</h1>";

					}
				while($row4 = mysql_fetch_row($result4))
					{
						foreach ($row4 as $cell4) {
							echo "<h6>$cell2</h6>";
						}
					}
			?>
			</div>
		</div>
	</body>
</html>

