<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Table</title>
</head>
<body>
	<?php

class MyArrayObject {

	public $arrayObject = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
}

class Child extends MyArrayObject {

	public function displayAsTable($name, $age) {

		echo $name;
		echo $age;

	}
}
$ami = new Child();
foreach ($ami->arrayObject as $name => $age) {

	$ami->displayAsTable($name, $age);
}

class View {
	//definition
	private $id;
	private $name;
	private $email;

	/*
		     * Constructor
	*/
	public function __construct($id, $name, $email) {
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
	}

	/*
		     * get ID
	*/
	public function getId() {
		return $this->id;
	}

	/*
		     * get Name
	*/
	public function getName() {
		return $this->name;
	}

	/*
		     * get Email
	*/
	public function getEmail() {
		return $this->email;
	}
}

// New View List Class which extends arrayObject in PHP
class ViewList extends ArrayObject {
	/*
		     * a public function to return data
	*/
	public function displayAsTable() // or you could even override the __toString if you want.
	{
		$sOutput = '<table border="1"><tbody>';
		foreach ($this AS $user) {
			$sOutput .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>',
				$user->getId(),
				$user->getName(),
				$user->getEmail()
			);
		}
		$sOutput .= print '</tbody></table>';

		return $sOutput;
	}

	/*
		     * return data to string
	*/
	public function __toString() {
		return $this->displayAsTable();
	}
}

/*
 *  data(s)
 */
$data = new ViewList();
$data[] = new View(1, 'Selim Reza', 'me@selimreza.com');
$data[] = new View(2, 'Half Way', 'selimppc@gmail.com');

/*
 * final output
 */
print $data;
?>
</body>
</html>