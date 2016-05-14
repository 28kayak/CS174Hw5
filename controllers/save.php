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
