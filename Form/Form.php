<html>
<head>
    <title>Create Form</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<center>
	<div id = "contentinfo" >
		
	<h2>Create Form</h2>
	<hr>
	<br>
        <form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
			<table id = "table1" >
				<tr>
					<td><h3>Enter the number of Fields you want in the form</h3></td>
				</tr>
				<tr>
					<td><input type = "number" name = "number" /></td>
				</tr>
				<tr>
					<td><input type = "submit" name = "submit" value = "Create" /></td>
				</tr>
			</table>
        </form>
		
		<?php
		if(isset($_POST['submit']))
		{ 
			$field = $_POST['number'];
			
			echo "<hr>";
			
			echo "<form method = 'POST' action = 'Filling.php'>" ;
			echo"<table id = 'table2'>";
				echo "<tr>
							<td><b>Field No<b></td>
							<td><b>Field Name<b></td>
							<td><b>Data Type<b></td>
					</tr>";
				for ($row=1; $row <=$field; $row++) 
				{ 
					
					echo"<tr>";
					echo "<b><td>Field $row  <b></td>"; 
					
					echo "<td><input type = 'text' name = '$row' /></td>";
		
					echo "<td>
					<select name='datatype[]' >
						<option value= 'Text'>text</option>
						<option value= 'Number'>number</option>
						<option value= 'Password'>Password</option>
						<option value= 'E-mail'>Email</option>
					</select><br><br>
					</td>";
					echo"</tr>";
		
				}
				echo"</table>";
				
				
				echo "<br><input type = 'submit' name = 'submit' value = 'Submit' ></form>";
				
				
			}

		?>
	   
    
	</div>
	</center>
</body>
</html>        