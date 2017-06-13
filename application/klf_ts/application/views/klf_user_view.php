<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>KLF User View</title>
</head>
<body>

<h1>
<?php

//echo $results;

 foreach ($results as $object) {

 	echo $object->name . "<br>";

 }

?>
</h1>

</body>
</html>