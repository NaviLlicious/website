<!doctype html>
<html>

<header>
	
	<link rel="stylesheet" href="css/style.css">
	
</header>

<body>

	<!-- "wrapper" is used to contain all the div classes so they don't overlap -->
	<div class="wrapper">
	
		<!-- this php calls "header.php" and includes it in every page we add this line to, this makes it so we don't need to repeat html for new pages -->
		<?php include 'header_footer/header.php'; ?>
		
		<!-- Keep this container, the content is added through css -->
		<div class="container">
		
		</div>
		
		<!-- We can use this container for whatever we want -->
		<div class="container2">
			<center>This is a test of the text.</center>
			<br/>
			<center>Just to make sure the text aligns properly.</center>
		</div>
		
		<!-- Same situation with footer, makes things easier -->
		<?php include 'header_footer/footer.php'; ?>
		
	</div>

</body>

</html>