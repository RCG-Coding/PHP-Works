<!DOCTYPE html>
<html>
<head>
<title>Question 2</title>
</head>

<body>

<form method='get'>
<input type='text' name='value'>
<input type='submit' value='Done'>
</form>

<?php

$name = $_GET['value'];
echo "I Love You So Much ".$name;

?>

</body>
</html>