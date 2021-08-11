<!DOCTYPE HTML>
<HTML>
<head>
<title>Memory Management System</title>
</head>
<body>
<form action="Mem.php" method="GET">

<pre>Select Algorithm:</pre><select name="algo" required>
	<option value=""></option>
  <option value="FIFO">FIFO</option>
  <option value="LRU">LRU</option>
  <option value="OPT">OPT</option>
</select>
<br/>
<pre>No. Of Frames    :</pre><input type="number" name="frames" min="1" max="5" required/><br/>
<pre>Input String     :</pre><input type="text" name="Str" required/><br/>
<input type="submit" value="Submit" name="SUB">
</form>
</body>
</html>


<?php
$a="";
$b="";
$c="";
$d="";
//$_GET["algo"]="";
//$_GET["frames"]="";
//$_GET["Str"]="";
if (!empty($_GET))
{
$a = $_GET["algo"];
$b = $_GET["frames"];
$d = $_GET["Str"];
$c = str_word_count($d,0,"0,1,2,3,4,5,6,7,8,9");  // Storing Selected Value In Variable

//echo $a;

echo "Agorithm selected :" .$a."<br>";
echo "No Of frames selected :" .$b."<br>";
echo "Length Of string :" .$c."<br>";
echo "Reference String :" .$d."<br>";  // Displaying Selected Value



/*$startnode = "gate1";
$endnode = "gate2";
*/exec('java '. $a.' '. $b.' '. $c.' '. $d. ' 2>&1', $output);
//exec('java DemoRoute 1 S102 2 R202 2>&1', $output);
//exec('java DemoRoute  2>&1', $output);
//exec('java DemoRoute 2>&1', $output);
//$i=0;
foreach($output as $value)
{
	/*if($i==2)
	{
			$b=str_split($value);
			str_replace("|","|",$b);
			//echo $value;
			//print_r($b);
			foreach($b as $value1)
				echo $value;
			echo "<br/>";
			continue;
	}*/
	echo $value;
	echo "<br/>";
	//$i++;
}
 //print_r($output);
}
?>