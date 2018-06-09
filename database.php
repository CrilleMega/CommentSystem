<?php 
$servername = "localhost";
$username = "chrlin-7";
$password = "kaca5vA";
$db = "chrlin-7_com";

//$username = "chrlin-7";
//$password = "kaca5vA";
//$db = "chrlin-7_webshop";

$link = new mysqli($servername, $username, $password, $db); //Anslut till SQL
mysqli_set_charset($link, "utf8");

if ($link->connect_error) {die("Connection failed: " . $conn->connect_error);} 


$result = $link->query("SELECT * FROM com");
$Amount = $result->num_rows; //Amount of comments
$ID = array();    //ID
$Content = array();   //Content


if($result = mysqli_query($link, "SELECT * FROM com"))
{
    while($row= mysqli_fetch_row($result))
    {
        $ID[]  = $row[0];
        $Content[] = $row[1];
    }
}
?>