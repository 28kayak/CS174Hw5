<?php
   ob_start();
   session_start();
?>


<?php
$msg = '';
            
if (isset($_POST['login']) && !empty($_POST['username'])  && !empty($_POST['password'])) 
{
	if ($_POST['username'] == 'kaya' && $_POST['password'] == 'ota')
	{
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'KAYA';
                
        echo 'You have entered valid use name and password';
    }else
    {
    	$msg = 'Wrong username or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Here is config.php</h1>
<?php
echo $_SESSION['username']."<br>";
echo $_SESSION['timeout']."<br>";


?>
</body>
</html>


