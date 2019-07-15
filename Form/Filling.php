<html>
<head>
    <title>Fill the Form</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<center>
	<div id = "contentinfo">
	
	<h2>Filling The Form</h2>
	<hr>
	<br>
	<?php 
	if(isset($_POST['submit']))
	{
		$data = array();


		foreach ( $_POST['datatype'] as $key => $select)
		{	
			$data[] = $select;
		} 
		$c1 = count($data); 

		echo "<form method = 'POST' action = 'Details.php'>";
		echo"<table id = 'table3'>";
		echo "<tr>
				<td><b>Field Name<b></td>
				<td><b>Value<b></td>
			</tr>";
		for ($row=0; $row < $c1; $row++) 
		{
			echo "<tr>";
			echo "<td>".$_POST[$row+1]."</td>" ;
			$type1 = $data[$row];
			echo "<td><input type = '$type1' name = 'name$row'></td>";
			echo "</tr>";
		}
		echo"</table>";
		echo "<input type = 'submit' name = 'submit' value = 'submit' ></form>";
	}
	?>
	</div>
	
	</center>
</body>
