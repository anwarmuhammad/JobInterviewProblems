<?php
// Built in ArrayObject class treat array as an object
$myArray = array(
	'mamu' => '45',
	'anu' => '26',
	'ant' => '27',
	'ami' => '29',

);
$obj = new ArrayObject($myArray, ArrayObject::ARRAY_AS_PROPS);

print_r($obj);
echo "<hr>";
print_r($obj->mamu);
echo "<hr>";
// adding key/value to the stack
$obj->offsetset('nanu', '21');
print_r($obj);
echo "<hr>";
// removing by key
$obj->offsetunset('ami');
print_r($obj);

?>