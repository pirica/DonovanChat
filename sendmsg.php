<center>
<?php 
include 'auth.php';
if(isset($_COOKIE['c']) AND $_COOKIE['un']){
	if($_COOKIE['c'] == $realcode){
		$calcsize = strlen(file_get_contents("chat.txt")) + strlen($_POST['msg']);
		if($calcsize > $maxsize){
$simplifiedchat = '('.$_COOKIE['un'].') - '.$_POST['msg'].'
'.file_get_contents("chat.txt");
$newchat = substr($simplifiedchat, 0, $maxsize);
file_put_contents("chat.txt", $newchat);
			echo '<meta http-equiv="refresh" content="2;url='.$weburl.'" />
<h1>Sending message...</h1>';
		}else{
file_put_contents("chat.txt", '('.$_COOKIE['un'].') - '.$_POST['msg'].'
'.file_get_contents("chat.txt"));
			echo '<meta http-equiv="refresh" content="2;url='.$weburl.'" />
<h1>Sending message...</h1>';
		}
		
	}else{
	echo '<p>Please log in.</p>';
	}
	
	
}else{
	echo '<p>Please log in.</p>';
}
?>
</center>
