<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM FORMDETAILS";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo $result['fname']." ".$result['lname']."          ".$result['emailid']."        ".$result['phoneno'];
// echo "$total";

if($total != 0)
{
  //  echo "table has records";
}
else{
    echo "no records";
}
?>