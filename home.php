<?php
// check to see if the user is logged in
if ($_SESSION['loggedin']) {

} else {
	// user is not logged in, send the user to the login page
	header('Location: login.php');
}
?>