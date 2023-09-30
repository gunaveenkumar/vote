<?php
include("database.php");

?>

<?php
if(empty($_POST["name"]))
{ 
    echo "enter name";
}
if(empty($_POST["number"]))
{
    die("enter the number");
}
if(empty($_POST["password"]))
{
    die("Enter the password");
}
if(empty($_POST["option"]))
{
    die("select the option");
}
$name=$_POST["name"];

$sql="SELECT * FROM voting
WHERE name='$name'";
$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
          if($row["password"]==$_POST["password"])
               {
            $_SESSION['id']=$row['id'];
            $_SESSION['status']=$row["status"];
            $_SESSION['data']=$row;
            header('location:votingpage.php');

               }
               else{
                echo"incorrect details";
               }
?>