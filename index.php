<?php

header("Content-Security-Policy: default-src 'self' 'unsafe-inline'");

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
    <div class="container">
      <h1>CSP Bypass Labs</h1>
      <p>Bypass project of CSP security standard, which is a protection method for XSS vulnerability.</p>
      <h3>What is CSP</h3>
      <p>Content Security Policy is a computer security standard that was introduced to prevent cross-site scripting, click-through, and other code injection attacks resulting from the execution of malicious content in the context of a trusted web page.</p>
      <a href="https://www.netsparker.com/blog/web-security/content-security-policy/" target="_blank">For more about CSP</a>
    </div>
  </body>
</html>
