<?php 
	//unset the items from the array
	session_start();
	$itemId=$_GET['itemId'];
	$itemList=$_SESSION['itemList'];
	unset($itemList[$itemId]);	
	$_SESSION['itemList']=$itemList;

	$edited=$_SESSION['edited'];
	unset($edited[$itemId]);
	$_SESSION['edited']=$edited;

	$checked=$_SESSION['checked'];
	unset($checked[$itemId]);
	$_SESSION['checked']=$checked;
	header('Location:index.php');
?>