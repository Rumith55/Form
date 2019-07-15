<html>
<head>
	<title>Entered Details</title>
	<link rel = "stylesheet" href = "style.css">
</head>

<body>
	
	<center>
	<div id = "contentinfo">
		<h2>Form</h2>
		<hr>
		<br>
		
		<?php
		if(isset($_POST['submit']))
		{

			$data = array();
			foreach ($_POST as $key => $value1) {
			$data[] = $value1;
			}
			$c1 = count($data);

			echo "<br>";
			for ($row=0; $row < $c1-1 ; $row++) 
			{
				echo $data[$row];
				echo "<br>" ;
	
			} 
		}
 
		?>
	</div>
	</center>
</body>
</html>