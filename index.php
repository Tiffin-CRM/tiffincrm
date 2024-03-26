<?php
// Set the HTTP status code to 302 Found for temporary redirection
header("HTTP/1.1 302 Found");
// Make sure search engines don't index the original page
echo '<meta name="robots" content="noindex">';
// Make sure no other code gets executed after the redirect
header("Location: login.php");

exit;
?>
