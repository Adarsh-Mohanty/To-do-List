<?php 
//edit the items in the array with the item id
	session_start();
	$itemId=$_GET['itemId'];
	$newVal=$_GET['value'];
	$itemList=$_SESSION['itemList'];
	$itemList[$itemId]=$newVal;
	$_SESSION['itemList']=$itemList;
	$edited=$_SESSION['edited'];
	$edited[$itemId]=1;
	$_SESSION['edited']=$edited;
	header('Location:index.php');
?>