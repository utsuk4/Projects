<?php 
	$todos = json_decode( file_get_contents('json.json'), true );
		
	$todo = array(  'id' => $_POST['id'] ,'name' => $_POST['name'] , 'text' => $_POST['todo_text']);
	
	
	$todo['id'] = $_POST['id'];
		
	$i = false;
	foreach( $todos as $j => $td ){
		$td = (object)$td; 

		if( trim($td->id) === trim($todo['id']) ){
			$i = $j;
			break;
		}
		
	}
	
	$todos[ $i ] = $todo; 
	file_put_contents('json.json', json_encode($todos));/*aba yo update gareko*//*unset() ley memory maa maatra delete garchha, tyo file haami aafailey update garnu parchha.*/
	header('Location: index.php');
	die();

?>
