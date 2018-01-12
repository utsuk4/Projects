<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div id="body">

<?php
		foreach( json_decode(     file_get_contents('json.json'), true ) as $todo ){ 
			
			$todo = (object)$todo;
	
		
		echo '<div class="todo"><div>'. $todo->name .'</div>';
		
		echo '	<a href="delete.php?todo='. $todo->id .'">Delete</a>';
		echo '	<a href="edit.php?todo='. $todo->id .'">Edit</a></div>';
		 }
		?>

	<form action="create.php" method="POST">
		<div>Name:<br/><input type="text" name="name" required></div>
		<div>Description:<br/><textarea name="todo_text"></textarea></div>
		<div id="button"> <input type="submit" name="submit" value="Save" style="background-color:#e6eeff; padding:.4em;"> </div>
	</form>
	
</div>
	
</body>
</html>
