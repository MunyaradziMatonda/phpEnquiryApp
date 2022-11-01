<?php
include 'index.php';

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['number'];
    $Enquiry = $_POST['enquiry'];

        $query = "SELECT * FROM enquiries WHERE number='$Phone' ";
        $result = mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_enquiry = $row['enquiry'];
            $db_resp = $row['response'];

            //Checking for Duplication of enquiry from the same phone number
            if(($Enquiry)==$db_enquiry)
            {
             if(empty($db_resp))
             {
               echo "Duplicate Enquiries!";
               echo "Your previous Enquiry is still being processed";
             }
             else{
              echo "Duplicate Enquiries!";
              echo "Please check the response on your previous Enquiry";
             }
            }
            else
            {
                $sql = "INSERT INTO enquiries(name,number,email,enquiry)values('$Name','$Phone','$Email','$Enquiry')";
                $result = mysqli_query($con,$sql);
            }
        }
        if($result){
        echo 'Enquiry recorded successfully!';
    }
    else{
        die(mysqli_error($con));
    }
}



?>

<html>
    <body>
    <a href="http://localhost:3000/index.html"><br> Return to Home Page</a>
    
    </body>
</html>