<?php 
	$id = $_GET['todo'];
	
	$todos = json_decode( file_get_contents('json.json'), true );
		
	$i = false;
	foreach( $todos as $j => $todo ){
		
		$todo = (object)$todo;
		if( trim($todo->id) === trim($id) ){
			$i = $j;
			break;
		}
		
	}	
	
	unset( $todos[ $i ] );/*array ra index deko ani tyo array ko given iindex wala element unset==delte garcha*/
	
	file_put_contents('json.json', json_encode($todos));/*aba yo update gareko*//*unset() ley memory maa maatra delete garchha, tyo file haami aafailey update garnu parchha.*/
	header('Location: index.php');
	die();
	
	
	
	
?>
