<?php 
session_start();
if(!isset($_SESSION['qid'])){
	$_SESSION['qid']=1;
}
if(!isset($_SESSION['itemList'])){
	$_SESSION['itemList']=array();
}
if(!isset($_SESSION['edited'])){
	$_SESSION["edited"]=array();
}
if(!isset($_SESSION['checked'])){
	$_SESSION["checked"]=array();
}
if(isset($_GET['newItem']) && $_GET['newItem']!=null){ 
	$_SESSION['qid']=$_SESSION['qid']+1;
	$newItem = $_GET['newItem'];
	$itemList=$_SESSION['itemList'];
	$itemList[$_GET['itemId']]=$newItem;
	$_SESSION['itemList']=$itemList;
}

?>

<!Doctype html>
<html>
	<head></head>
	<body>
		<h1 align="center">To-do list</h1>	
		<form action="index.php">
			<ol>
				<?php 
					foreach($_SESSION['itemList'] as $x => $x_value) {
					    echo '<li><input type="checkbox" id="'.$x.'" value="'.$x_value.'" onclick="check('.$x.')"';
					    $checked=$_SESSION["checked"];
					     if(isset($checked[$x])){echo "checked";}
					    echo '><input type="text" value="'.$x_value.'" id="i'.$x.'"><input type="button" onclick="edit('.$x.')" value="Edit"><input type="button" onclick="del('.$x.')" value="Delete"></li>';
					}
				?>
				
			</ol>
			<input type="text" minlength="1" name="newItem"><input type="hidden" name="itemId" value="<?php echo $_SESSION['qid'] ?>"><input type="submit" name="Submit">
		</form>
		<script>
			function edit(item) {
				newVal=document.getElementById('i'+item).value;
				window.location="edit.php?itemId="+item+"&value="+newVal;
			}
			function del(item) {
				window.location="delete.php?itemId="+item;
			}
			function check(item) {
				window.location="check.php?itemId="+item;
			}
		</script>
	</body>
</html>