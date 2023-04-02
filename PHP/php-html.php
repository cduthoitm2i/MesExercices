<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passer du mode PHP au mode HTML et vice-versa</title>
</head>
<body>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() n'a pas retourné FALSE</h3>
<p>Vous utilisez Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() a retourné FALSE</h3>
<p>Vous n'utilisez pas Internet Explorer</p>
<?php
}
?>

</body>
</html>