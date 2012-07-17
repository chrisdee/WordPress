<?php

// load the instantwp functions
include 'instantwp/functions.php';
$config = load_config($base_dir);
$redirect_to_wp = $config['redirect_to_wp'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
if ($redirect_to_wp == 0 ) {
?>
<meta http-equiv="refresh" content="1;url=instantwp/index.php">
<?php
}else{
?>
<meta http-equiv="refresh" content="1;url=wordpress/index.php">
<?php
}
?>
<title>Instant WordPress</title>
<style type="text/css">
<!--
BODY {
font-family: Verdana, Trebuchet MS;
font-size: 14px;
}
-->
</style>
</head>

<body>
Redirecting...

</body>
</html>



