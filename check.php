<?php 
	//Keep track of which items are checked
	session_start();
	$itemId=$_GET['itemId'];

	$checked=$_SESSION['checked'];
	//checks or unchecks based on the current value
	if($checked[$itemId]==1){
		unset($checked[$itemId]);	
	}else{
		$checked[$itemId]=1;
	}
	
	$_SESSION['checked']=$checked;
	header('Location:index.php');
?>