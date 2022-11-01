<?php
include 'index.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql =  "DELETE FROM enquiries WHERE id = $id";
    $result = mysqli_query($con,$sql);

    if($result){
       // echo "Deleted Successfully!";
      header('location:admin.php');
    }
    else {
        die(mysqli_error($con));
    }
}

?>