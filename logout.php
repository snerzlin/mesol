<?php 
echo"haha";
setcookie('username', '', time() - (86400 *30), '/'); //reduce time to negative ; expired cookies
header('Location: index.php');
 ?>