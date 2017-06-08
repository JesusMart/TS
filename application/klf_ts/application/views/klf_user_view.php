<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>KLF User View</title>
</head>
<body>

<h1>
<?php

foreach ($results as $object) {

	echo $object->name . "<br>";

}

?>
</h1>

</body>
</html>