<?php
$servername="localhost";
$username ="username"
$password ='';
$database_name="restaurant";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $full_name = $_POST['full_name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql_query = "INSERT INTO restaurant (full_name,email,message)
    VALUES ('$full_name,$email,$message)";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry Inserted Successfully !";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>