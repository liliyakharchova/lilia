!DOCTYPE html>
<html>
<head><title>LabWork#1</title>
</head>
<body>
<h1> First operations </h1>
<?php
// однострочный комментарий задается так
# или вот так, но используется реже
/* многострочный комментарий может быть
оформлен таким образом
*/
?>
<?php //============================================================ ?>
<h2> Exercise 1</h2>
<?php //============================================================ ?>
<?php //Вывод на экран текстовой строки ?>
<?php echo "Hello World!"; ?><br />
<?php //Вывод на экран объединенной текстовой строки ?>
<?php echo "Hello" . " World!"; ?><br />
<?php //Простейшая арифметика и вывод результата ?>
<?php echo 2 + 3; ?>
<?php //============================================================ ?>
<h2> Exercise 2</h2>
<?php //============================================================ ?>
<?php //Вывод на экран текстовой строки, сформированной из переменных и
литералов ?>
<?php $name="Alex";
$surname="Socol";
$age=21;
echo "Hello, my name is $name $surname. I am $age years old <br>";
//или через оператор конкатенации
echo "Hello, my name is".$name." ".$surname." I am ".$age." years old <br>"; 
?><br />
<?php //Применение стилей к выводимой строке ?>
<?php echo "<p style='color:green'>"."Hello, my name is $name $surname. I am $age years
old </p>"; ?><br />
<?php //============================================================ ?>
<h2> Exercise 3</h2>
<?php //============================================================ ?>
<?php //Целочисленные операции, встроенные функции, вывод на экран ?>
<?php
$var1 = 3;
$var2 = 4;
?>
Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
<br />
Absolute value: <?php echo abs(0 - 300); ?><br />
Exponential: <?php echo pow(2,8); ?><br />
Square root: <?php echo sqrt(100); ?><br />
Modulo: <?php echo fmod(20,7); ?><br />
Random: <?php echo rand(); ?><br />
Random (min,max): <?php echo rand(1,10); ?><br />
<br />
+= : <?php $var2 += 4; echo $var2; ?><br />
-= : <?php $var2 -= 4; echo $var2; ?><br />
*= : <?php $var2 *= 3; echo $var2; ?><br />
/= : <?php $var2 /= 4; echo $var2; ?><br />
<br />
Increment: <?php $var2++; echo $var2; ?><br />
Decrement: <?php $var2--; echo $var2; ?><br />
<br />
<?php
// PHP постарается преобразовать строку в чило если это возможно
// но это не слишком хороший стиль программирования
echo 1 + "2 houses"; ?>
<?php //============================================================ ?>
<h2> Exercise 4</h2>
<?php //============================================================ ?>
<?php //Работа с "нулевым" типом данных ?>
<?php
$var1 = null;
$var2 = "";
?>
var1 null? <?php echo is_null($var1); ?><br />
var2 null? <?php echo is_null($var2); ?><br />
var3 null? <?php echo is_null($var3); ?><br />
<br />
var1 is set? <?php echo isset($var1); ?><br />
var2 is set? <?php echo isset($var2); ?><br />
var3 is set? <?php echo isset($var3); ?><br />
<br />
<?php // empty: "", null, 0, 0.0, "0", false, array() ?>
<?php $var3 = "0"; ?>
var1 empty? <?php echo empty($var1); ?><br />
var2 empty? <?php echo empty($var2); ?><br />
var3 empty? <?php echo empty($var3); ?><br />
<?php //============================================================ ?>
 <h2> Exercise 5</h2>
<?php //============================================================ ?>
 <?php //Числа с плавающей точкой, округление до целых ?>
<?php echo $float = 3.14; ?><br />
<?php echo $float + 7; ?><br />
<?php echo 4/3; ?><br />
<?php echo 4/0; ?><br />
Round: <?php echo round($float, 1); ?><br />
Ceiling: <?php echo ceil($float); ?><br />
Floor: <?php echo floor($float); ?><br />
<br />
<?php $integer = 3; ?>
<?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
<?php echo "Is {$float} integer? " . is_int($float); ?><br />
<br />
<?php echo "Is {$integer} float? " . is_float($integer); ?><br />
<?php echo "Is {$float} float? " . is_float($float); ?><br />
<br />
<?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
<?php echo "Is {$float} numeric? " . is_numeric($float); ?><br />
<?php //============================================================ ?>
<h2> Exercise 6</h2>
<?php //============================================================ ?>
 <?php //Преобразование и проверка типов ?>
<br />
<?php $count = "2 cats"; ?>
Type: <?php echo gettype($count); ?><br />
<?php $count += 3; ?>
Type: <?php echo gettype($count); ?><br />
<?php $cats = "I have " . $count . " cats."; ?>
Cats: <?php echo gettype($cats); ?><br />
<br />
Type Casting<br />
<?php settype($count, "integer"); ?>
count: <?php echo gettype($count); ?><br />
<?php $count2 = (string) $count; ?>
count: <?php echo gettype($count); ?><br />
count2: <?php echo gettype($count2); ?><br />
<br />
<?php $test1 = 3; ?>
<?php $test2 = 3; ?>
<?php settype($test1, "string"); ?>
<?php (string) $test2; ?>
test1: <?php echo gettype($test1); ?><br />
test2: <?php echo gettype($test2); ?><br />
</body>
</html>
<!doctype html>
<html>
