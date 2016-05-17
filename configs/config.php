
<?php
header('X-FRAME-OPTIONS: SAMEORIGIN');
header('X-FRAME-OPTIONS: DENY');
?>
<?php
   ob_start();
   session_start();
?>


<?php
$username = "kaya";
$password = "ota";
$msg = '';
            
if (!empty($_POST['user'])  && !empty($_POST['ps'])) 
{
    //echo "if is ture 1";
	if ($_POST['user'] == $username && $_POST['ps'] == $password)
	{
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'KAYA';
        echo "Session Starts ".$_SESSION['username']."<br>";
                
        //echo 'You have entered valid user name and password';
        include("../views/elements/control_pnale.html");
    }else
    {
    	$msg = 'Wrong username or password';
    }
}else
{
    echo "something wrong";
    echo $_POST['user']."<br>";
    echo $_POST['ps']."<br>";
    //echo $_POST['login']."<br>";

}
?>


<?php
   session_destroy();
?>












