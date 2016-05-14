


<?php
/*After save button clicked
2 effect will happen:
 (1) Saving the current specials so that they now will also display on the menu page, 
 (2) send an email to anyone who has ever accumulated rewards the new specials. 

*/

$menu_specials = $_REQUEST['menu'];
$db = mysqli_connect("localhost","root","root","Hw5");

$query = "insert into MENU values (\"".$menu_specials."\")";
		//echo $query;
$result = mysqli_query($db, $query);
if ($result == true)  //??????
{
	echo "Success to save";
	return true;
}
else
{
	echo "Fail to save";
	return false;
}
mysqli_close($db);



echo $menu_specials;








?>
