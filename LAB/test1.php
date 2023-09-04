<?php
/* №1 Вивести на сторінку «Hello World» (echo та print) */

$hello = "Hello world";
echo "$hello <br/>";
print($hello."<br/><br/>");

/* №2 ESCAPE послідовності: вивести «Hello World» в різних варіаціях */

/* «Hello» в 1-му рядку, «World» в другому; */
$hello = "Hello\n World\n";
print("$hello"."<br/>");

/* «Hello» в 1-му рядку, «World» в другому рядку та з табуляції; */
$hello = "Hello\n\t World\n";
print($hello."<br/><br/>");

/* Вивести на сторінку рядок: «Hello World. \”It’s my page!”\»; */
echo "Hello World. " ."\"It's my page!\"";

/* Вивести на сторінку рядок '<h1>Hello</h1> <h3> World </h3> <b>I</b> <i> am</i> <u>new PHP developer</u>';*/
echo "<h1>Hello</h1> <h3> World </h3> <b>I</b> <i> am</i> <u>new PHP developer</u><br/><br/>";

/* №3 Вивести протилежне значення введеному в змінну (input “5”, output “-5”)*/
$input = 5;
$input = -$input;
echo $input."<br/><br/>";

/* №4 Створити 2 змінні та вивести результат можливих математичних операцій між ними (+, –, *, /, %).*/
$num1 = 5;
$num2 = 5;

$sum = $num1 + $num2;
$minus = $num1 = $num2;
$mul = $num1 * $num2;
$dev = $num1 / $num2;
$remain = $num1 % $num2;

echo "$num1 + $num2 = ".$sum."<br/>";
echo "$num1 - $num2 = ".$minus."<br/>";
echo "$num1 * $num2 = ".$mul."<br/>";
echo "$num1 / $num2 = ".$dev."<br/>";
echo "$num1 % $num2 = ".$remain."<br/><br/>";

/* №5 Поміняти 2 числа місцями. */
$num2 = 6;
$t = $num1;
$num1 = $num2;
$num2 = $t;
echo "num 1 = $num1<br/>num 2 = $num2<br/><br/>";

/* №6  Створити 2 змінні: username / password вивести на сторінку
два input тега, типу text, де placeholder — це назва змінної,
а text — значення, записане в змінну. */

$username = "Denis";
$password = "2023";

echo "Username: <input type='text' value='$username'><br/><br/>Password: <input type='password' value='$password'><br/><br/><br/><br/>";

/* №7 Зробити сторінку, де описати змінні: font_family, font_size,
font_style. Значення в цих змінних — це value відповідного
стилю. Вивести тег <p> з стилями, описаними в змінних.*/

$font_family = 'font-family: Arial';
$font_size = "font-size: 60px";
$font_style = "font-style: italic";
echo "$font_family<br/>";
echo "$font_size<br/>";
echo "$font_style<br/>";
echo "<p style='$font_family; $font_size; $font_style'>Hello</p>";