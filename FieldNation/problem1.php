<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Field Nation Interview</title>
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}


</style>
</head>
<body>
<h1>Customer's Info Table:</h1>

<?php

// class that inherits from PHP's ArrayObject class

class View extends ArrayObject {

// function  that outputs all the set keys and values as an HTML table

	public function displayAsTable($obj) {

		$sOutput = '<table id="customers"><tbody>';
		$sOutput .= sprintf('<tr><td>%s</td><td>%s</td></tr>',
			'Name',
			'Contact Number');

		foreach ($obj as $name => $contact) {
			$sOutput .= sprintf('<tr><td>%s</td><td>%s</td></tr>',
				$name,
				$contact
			);
		}

		print_r($sOutput);

	}
}

$data = array();

// Instantiate Object

$obj = new View($data);

//  setting some keys for the object

$obj->offsetset('John', '018');
$obj->offsetset('Jill', '017');
$obj->offsetset('Joy', '019');
$obj->offsetset('Doe', '018');
$obj->offsetset('Jerry', '017');
$obj->offsetset('Anu', '019');

// call the object's displayAsTable() function

$obj->displayAsTable($obj);

?>

</body>
</html>