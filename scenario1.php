<?php
	header("Content-Security-Policy: default-src 'self' 'unsafe-inline' ");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<title>CSP Bypass Lab</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="styles.css" />		
	</head>
	<body>
		<nav>
			<a href="index.php">Conten Security Policy</a>
			<a href="scenario1.php">Scenario 1</a>
			<a href="scenario2.php">Scenario 2</a>
			<a href="scenario3.php">Scenario 3</a>
			<a href="scenario4.php">Scenario 4</a>
			<a href="scenario5.php">Scenario 5</a>
			<a href="scenario6.php">Scenario 6</a>
		</nav>
		<div>
			<h1>Level 1</h1>
			<br>
			<h4>
				Content Security Policy : default-src 'self' 'unsafe-inline'
			</h4>
			<br>
			<br>
			<?php
				$payload = $_GET["input"] ?? '';
			?>
			<form action="#" method="get">
				<input type="text" name="input" id="input" />
				<button type="submit">Submit</button>
			</form>
			<br>
			<p>Your payload is :</p>
			<div id="output">
				<?php
					echo $payload 
				?>
			</div>
		</div>
	</body>
</html>