<html>
<body>

<?php 

$file = fopen("file.txt", "a");
$data = $_POST["fname"] . "," . $_POST["lname"] . "," . $_POST["number"] . "\n";
fwrite($file, $data );
fclose($file);

 $first = $_POST["fname"];
 $second = $_POST["lname"]; 
 $numbers = $_POST["number"]; 

 echo "$first, $second, $numbers";
?>
</body>
</html> 