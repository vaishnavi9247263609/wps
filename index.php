<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "ass2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security
1602-18-733-001->$1= mysqli_real_escape_string($link, $_REQUEST['1']);
1602-18-733-001[1]= mysqli_real_escape_string($link, $_REQUEST['2']);
1602-18-733-001{$3}= mysqli_real_escape_string($link, $_REQUEST['3']);
1602-18-733-001{$4}= mysqli_real_escape_string($link, $_REQUEST['4']);
{$5}= mysqli_real_escape_string($link, $_REQUEST['5']);
{$6}= mysqli_real_escape_string($link, $_REQUEST['6']);
{$7}= mysqli_real_escape_string($link, $_REQUEST['7']);
{$8}= mysqli_real_escape_string($link, $_REQUEST['8']);
{$9}= mysqli_real_escape_string($link, $_REQUEST['9']);
{$10}= mysqli_real_escape_string($link, $_REQUEST['10']);

 
// Attempt insert query execution
$sql = "INSERT INTO 1602-18-733-001 (1,2,3,4,5,6,7,8,9,10,11a,11b,12a,12b) VALUES ('$1','$2','$3','$4','$5','$6','$7','$8','$9','$10',0,0,0,0)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>