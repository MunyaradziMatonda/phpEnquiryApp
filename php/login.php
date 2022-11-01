<?php
include 'index.php';

//Login Validation
if(isset($_POST['loginbtn']))
{
    $Uname = $_POST['username'];
    $Pass = $_POST['password'];

    if(empty($Uname) || empty($Pass))
    {
        echo 'Please fill in the Blanks';
    }
    else
    {
        $query = "SELECT * FROM admin WHERE Username='$Uname' ";
        $result = mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_password = $row['Password'];

            if(($Pass)==$db_password)
            {
                header("location:admin.php");
            }
            else
            {
               echo 'Incorrect Password!' ;
            }
        }
        else
        {
            echo 'Please check your Username';
        }
    }
}

?>