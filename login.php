<?php 
include 'auth.php';
if($_POST['c'] == $realcode){
setcookie("c", $_POST['c']);
setcookie("un", $_POST['un']);
$simplifiedchat = '(SYSTEM) - '.$_POST['un'].' has joined the chat! Say hello! :)
'.file_get_contents("chat.txt");
$newchat = substr($simplifiedchat, 0, $maxsize);
file_put_contents("chat.txt", $newchat);
echo '<meta http-equiv="refresh" content="2;url='.$weburl.'" />
<h1>Checking...</h1>';
}else{
	echo "<h1>Invalid Chat Code!</h1><p>Ask the chat admin for this.</p>";
}
?>
