--TEST--
Test wrong number of arguments for acosh()
--SKIPIF--
<?php
if (!function_exists("acosh")) {
	die("SKIP acosh - not supported\n");
}
?> 
--FILE--
<?php
/* 
 * proto float acosh(float number)
 * Function is implemented in ext/standard/math.c
*/ 

$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(acosh($arg_0, $extra_arg));

echo "\nToo few arguments\n";
var_dump(acosh());

?>
--EXPECTF--
Too many arguments

Warning: Wrong parameter count for acosh() in %s on line 11
NULL

Too few arguments

Warning: Wrong parameter count for acosh() in %s on line 14
NULL
