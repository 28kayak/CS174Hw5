<?php
$email = $_POST["email"]; 
$reward = $_POST["reward"];
echo "email = ".$email."<br>";
echo "reward = ".$reward."<br>";


if ($reward == "balance") 
{
	$message = "<b>You have reward from L'entract.</b>";
	$message .= "<h1>Rewards Type is Balance</h1>";
}
else if($reward == "")
{
	$message = "<b>You have reward from L'entract.</b>";
	$message .= "<h1>Rewards Type is Balance</h1>";
}

$to = $email;
$subject = "Congraturation! Rewards from L'entract";
         
$header = "From:kaya_ota@msn.com \r\n";
$header .= "Cc:kaya.ota@sjsu.edu \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
         
$retval = mail ($to,$subject,$message,$header);
         
 if( $retval == true )
 {
    echo "Message sent successfully...";
 }
 else 
 {
    echo "Message could not be sent...";
 }


?>