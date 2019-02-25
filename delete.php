
<?php
//GET
if (isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost", "root", "", "golden");
    extract($_GET);
    $sql ="delete from employees where id=$id";
    mysqli_query($conn,$sql);

}
header("locaion:fetch.php");

//git init
//git add
//git commit -m "Php Basics Files"