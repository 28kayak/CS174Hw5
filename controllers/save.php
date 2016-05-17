<?php
header('X-FRAME-OPTIONS: SAMEORIGIN');
header('X-FRAME-OPTIONS: DENY');
?>


<?php
/*After save button clicked
2 effect will happen:
 (1) Saving the current specials so that they now will also display on the menu page, 
 (2) send an email to anyone who has ever accumulated rewards the new specials. 

*/

 //DataBase Infomartion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hw5";

//get menu-specials from form
$menu_specials = $_REQUEST['menu'];

//create DB connection
$db = new mysqli($servername, $username, $password,$dbname);
//insert into MENU(specials) values ("the current menu activity4")
$query = "insert into MENU(specials) values (\"".$menu_specials."\")";
echo "<br> Query = ".$query."<br>";
$result = mysqli_query($db, $query);
if ($result == true)  //??????
{
	echo "Success to save";
	//return true;
}
else
{
	echo "Fail to save";
	//return false;
}
mysqli_close($db);

//Send Reward Emails
//create DB connection




$db = new mysqli($servername, $username, $password,$dbname);
$query = "select id, email, balance from PATRON where balance >= 1000";
echo "<br> Query = ".$query."<br>";

$result = $db->query($query);
while ($row = $result->fetch_assoc())
{
	# code...
	echo htmlentities($row['id']);
	echo "<br>";
	echo htmlentities($row['email']);
	echo "<br>";
	echo htmlentities($row['balance']);
	//$to = $row['email'];
	echo "<br>";
	sendEmail($row['email'],$row['balance']);
}
echo "<br>Fetched data successfully<br>";
mysqli_close($db);

//INSERT INTO PATRON(email,balance) VALUES("kaya.ota@sjsu.edu", 995)
function sendEmail($to, $balance)
{
	# code...
	//$to = "kaya.ota@gmail.com";
    $subject = "Reward!!";
         
    $message = "<b>Reward</b>";
    $message .= "<h1>Your reward".$balance."</h1>";
         
    $header = "From:kaya_ota@msn.com \r\n";
    //$header .= "Cc:kaya_ota@msn.com\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
         
    $retval = mail ($to,$subject,$message,$header);
         
    if( $retval == true )
    {
    	echo "Message sent successfully...<br>";
    }
    else
    {
        echo "Message could not be sent...<br>";
    }
}



/*
$retval = mysqli_query($db, $query);
if(!$retval ) 
{
	//When file to get data 
    die('Could not get data: ' . mysql_error());
}
   
while($row = mysql_fetch_assoc($retval)) 
{
	echo "in while";
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP Email : {$row['email']} <br> ".
         "--------------------------------<br>";
}
*/




//echo $menu_specials;








?>
