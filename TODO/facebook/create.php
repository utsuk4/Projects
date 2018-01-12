<?php


			$todos = json_decode( file_get_contents('json.json'), true );
			
		
			$todo = array(  'id' => uniqid() ,'name' => $_POST['name'] , 'text' => $_POST['todo_text']);
			
			
			$todos[] = $todo;
						 
			 
			 file_put_contents('json.json', json_encode($todos));
			 
			 
			 header('Location: index.php');
			 die();
			
?>
