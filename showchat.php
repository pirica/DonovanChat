<center>
<?php 
include 'auth.php';
if(isset($_COOKIE['c']) AND $_COOKIE['un']){
	if($_COOKIE['c'] == $realcode){
		echo '<b><p>Chat will reload every '.$chatreload.' seconds.</b> Last updated on '.date("m/d/Y").' at '.date("h:i:sa").' server time. Messages at the top are newer, ones at the bottom are older.</p><meta http-equiv="refresh" content="'.$chatreload.'"><textarea rows="100%" cols="100%" disabled>'.file_get_contents("chat.txt").'</textarea>';
	}else{
	echo '<p>Please log in.</p>';
	}
}else{
	echo '<p>Please log in.</p>';
}
?>
</center>
