<?php
if(isset($_POST['user']))
{
$user=$_POST['user'];
for($x=0;$x<=10;$x++)
{
echo $user;
echo '<br>';
}
}
?>

<form action="index.php" method="POST">
Your Name: <br>
<input type="text" name="user"/>
<input type="submit" value="Print"/>
</form>