<?php


	$id = $_GET['todo'];
	
	$todos = json_decode( file_get_contents('json.json'), true );
	$todo = false;
	
	foreach( $todos as  $td ){
		$td = (object)$td;
		if( $td->id === $id ){
			
			$todo = $td;
			break;
		}
		
	}
	 

?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div id="body">


	<form action="update.php" method="POST">
		<div>Name:<br/><input type="text" name="name" value="<?php  echo $todo->name; ?>" required></div>
		<div>Description:<br/> <textarea name="todo_text" ><?php  echo $todo->text; ?></textarea></div>
		<input type="hidden" name="id" value=" <?php echo $id; ?>">
		<div id="button"> <input type="submit" name="submit" value="Save" style="background-color:#e6eeff; padding:.4em;"> </div>
	</form>
</div>
	
</body>
</html>
