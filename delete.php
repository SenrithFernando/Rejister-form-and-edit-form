<?php
include "conn.php";

if(isset($_GET['deleteid'])){
    $ItemID=$_GET['deleteid'];
    $sql="DELETE FROM `seller` WHERE SellerID=$ItemID";
    
    echo "<script>alert('Item Succesfuly Deleted');</script>";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Item Succesfuly Deleted');</script>";
        header('location:editProfile.php');
    }
}
?>