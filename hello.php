<html>

<head>
</head>

<body>
<?php
	echo "Hello World";
	
	$x=5;
	$y=10;
	
	function myTest(){
		
		global $x,$y;
		$y=$x+$y;
	}
	
	myTest();
	echo "<br />";
	echo $y;
	
	for($x=1; $x<=6; $x++){
	
		echo "<h$x> Hello World </h$x>";
	}
	$arr = array("one","two","three");
	foreach($arr as $value){
		echo "Value:" . $value . "<br />";
	}
	
	$cars = array("Volvo","BMW","Toyota");
	$arrlength = count($cars);
	
	foreach($cars as $value){
		echo "$value <br />";
	}
	
?>
</body>

</html>


