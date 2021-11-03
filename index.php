<center>
<?php 
include 'auth.php';
echo '<h1>'.$chatname.'</h1>';
if(isset($_COOKIE['c']) AND $_COOKIE['un']){
	if($_COOKIE['c'] == $realcode){
		echo '<form action="sendmsg.php" method="post">
<b>Send Message as '.$_COOKIE['un'].': </b><input type="text" name="msg" id="msg" minlength="'.$minmsg.'" maxlength="'.$maxmsg.'" required><input type="submit" value="Send">
</form>
<iframe src="'.$weburl.'/showchat.php" style="border:0px #ffffff none;" name="chatframe" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="100%" allowfullscreen></iframe>';
	}else{
	echo '<form action="login.php" method="post">
  Set a Username: <input type="text" name="un"><br>
  Chat Code: <input type="password" name="c"><br>
      <input type="submit" value="Login" />
    </form>';
	}
	
	
}else{
	echo '<form action="login.php" method="post">
  Set a Username: <input type="text" name="un"><br>
  Chat Code: <input type="password" name="c"><br>
      <input type="submit" value="Login" />
    </form>';
}
?>
</center>
