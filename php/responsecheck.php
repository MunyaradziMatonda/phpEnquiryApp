<?php

include 'index.php';

//Assigning the provided email to a variable
$Email = $_REQUEST['email'];

//Query for all elements and getting result 
$sql = "SELECT * FROM enquiries WHERE email='$Email' ";
$result = mysqli_query($con,$sql);

if($result){
    $rows=mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Response</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(108,109,253,255) 35%, rgba(37,133,252,255) 100%);">
    
    <h3 style="color: white; text-align: right; margin:0; padding-right: 70px; padding-top: 50px;">

        <a href="http://127.0.0.1:5500/html/index.html"></a>
       </h3>
    <div class="enquiries">
        <div class="enquiry">
       
        <?php
       $nw_email= $_REQUEST['email'];
         if ($nw_email==$rows['email'])
         { ?>
        <span class="header"><?php echo $rows['email']; ?></span>
            <span class="header"><?php echo $rows['number']; ?></span>
            <div class="text">
                <span class="customer"> <?php echo $rows['enquiry']; ?> </span>
                <h1>Response:</h1>
                <br>
                <span class="response"> <?php echo $rows['response']; ?> </span>
                <a href="http://localhost:3000/index.html">Return to Homepage</a>

            </div>
         <?php }
         else
         {
            echo $rows['email'];
            echo 'Not found';
         } ?>
        </div>
    </div>
    <style>
        .enquiries{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            }
            .enquiries .enquiry{
            background-color: #eee;
            padding: 20px;
            border-radius: 5px;
            margin: 10px;
        }
        .enquiries .enquiry .header{
            font-size: 25px;
            font-weight: bolder;
        }
            .enquiries .enquiry .text{
                display: flex;
                flex-direction: column;
            }
            .enquiries .enquiry .text span{
                font-size: 25px;
                padding: 10px;
            }
            .enquiries .enquiry .text span:first-child{
                border-bottom: 2px dotted black;
            }
    </style>
</body>
</html>