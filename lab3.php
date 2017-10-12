<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$hour = (int)strftime('%H');
$welcome = '';

if ($hour < 6 ){
	echo "Доброй ночи!";
}
elseif ( $hour >= 6 && $hour < 12){
	echo "Доброе утро!";
}
elseif ($hour >= 12 && $hour < 18){
	echo "Добрый день!";
}
elseif ($hour >= 18 && $hour < 23){
	echo "Добрый вечер!";
}
else {
	echo "Доброй ночи";
}
?>


</body>
</html>