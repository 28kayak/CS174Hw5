<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hw5";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed" . $conn->connect_error;
}
else{
  echo "<br>OK to connect<br>";
  echo "<br>call create DB()";
  createDB($conn);
}
echo "<br>before closing db <br>";
$conn->close();


//CREATE TABLES
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed" . $conn->connect_error;
}
else
{
  echo "<br>OK to connect<br>";
  echo "<br>call create Patron()<br>";
  createPATRON($conn);
  echo "<br>call create MENU()<br>";
  createMenu($conn);
   echo "<br>call create Receipt()<br>";
  createRECEIPT($conn);
}

function createDB($conn){
  // Create database
  $sql = "CREATE DATABASE Hw5";
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully<br>";
  } else {
      echo "<br>Error creating database: " . $conn->error;
  }

}//create DB


function createPATRON($conn){
  // sql to create table
  $sql = "CREATE TABLE PATRON(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    balance INT
    )";

  /*$sql = "CREATE TABLE Users (
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    last_in TIMESTAMP )";*/

    if ($conn->query($sql) === TRUE)
    {
      echo "Table PATRON created successfully";
    }else 
    {
      echo "Error creating table: " . $conn->error;
    }
}
function createMenu($conn)
{
  $sql = "CREATE TABLE MENU(
    id INT AUTO_INCREMENT PRIMARY KEY,
    specials VARCHAR(100)
    )";
  if ($conn->query($sql) === TRUE)
  {
    echo "Table PATRON created successfully";
  }else 
  {
    echo "Error creating table: " . $conn->error;
  }
}

function createRECEIPT($conn)
{
  $sql = "CREATE TABLE RECEIPU(
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount INT,
    email VARCHAR(50)
    )";
  if ($conn->query($sql) === TRUE)
  {
    echo "Table PATRON created successfully";
  }else 
  {
    echo "Error creating table: " . $conn->error;
  }
}




//reference to connect to mysql from xampp
//http://hapisupu.com/2015/11/xampp-5-6-14-version-up-fix-no-security/


//To start Mysql on XAMPP
// $ ps -u mysql
//  UID   PID TTY           TIME CMD
//   74   320 ??         2:01.69 /usr/local/mysql/bin/mysqld --basedir=/usr/local/mysql --datadir=/usr/local/mysql/d
//Kayas-MacBook-Pro-9:bin kaya$ kill 320
//-bash: kill: (320) - Operation not permitted


//Kill the demon mysql with sudo
//Kayas-MacBook-Pro-9:bin kaya$ sudo kill 320
//Kayas-MacBook-Pro-9:bin kaya$ ps -u mysql
//  UID   PID TTY           TIME CMD

//Start Mysql
//Kayas-MacBook-Pro-9:bin kaya$ sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start
//Warning: World-writable config file '/Applications/XAMPP/xamppfiles/etc/my.cnf' is ignored
//Starting MySQL
//. SUCCESS!


?>