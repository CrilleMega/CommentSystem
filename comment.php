<?php include "database.php";?>
<?php
//Skicka kommentar
$usercomment = ($_POST["comment"]); 
//Skicka namn
$namn = ($_POST["namn"]); 
//echo $usercomment;
$conn=mysqli_connect($servername, $username, $password, $db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$ID = (99999999-$Amount);

if(strlen($namn) < 2)
{
    $namn = "Anonymous";
}



if(strlen($usercomment) >=2)
{
    if(strtoupper($usercomment) == "DELETE")
    {
        $sql = "DELETE FROM com WHERE 1=1";
    }
    else 
    {
    date_default_timezone_set("Europe/Stockholm");
    $usc = ("<b>$namn</b>     " . date("y/m/d") . " - " . date("H:i") .   "<br><br>" . $usercomment);
    $sql = "INSERT INTO `com`(`ID`, `Content`) VALUES ($ID,\"$usc\")";
    }

    if ($conn->multi_query($sql) === TRUE) {
        //echo "New records created successfully";
    } 
       else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}  
?>

<script>
    location.replace("sandbox.php");
</script>