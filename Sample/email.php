 
 <?php

 $to = "kaya.ota@gmail.com";
 //select email form patron iterate
 $subject = "Congraturation!!";
         
 $message = "<b>This is HTML message.</b>";
 $message .= "<h1>This is headline.</h1>";
         
 $header = "From:kaya_ota@msn.com \r\n";
 $header .= "Cc:kaya.ota@sjsu.edu \r\n";
 $header = "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";
         
 $retval = mail ($to,$subject,$message,$header);
         
 		if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
echo "after mail is called";

//This does work
?> 

