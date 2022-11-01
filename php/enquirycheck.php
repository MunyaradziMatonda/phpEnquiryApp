<?php
include 'index.php';


//Login Validation
if(isset($_POST['submitbtn']))
{
    $Uname = $_POST['username'];
    $Email = $_POST['email'];

    if(empty($Uname) || empty($Email))
    {
        echo 'Please fill in the Blanks';
    }
    else
    {
        $query = "SELECT * FROM enquiries WHERE email='$Email' ";
        $result = mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_email = $row['email'];
            $db_uname = $row['name'];
            $db_resp = $row['response'];

            if(($Email)==$db_email && ($Uname)==$db_uname)
            {
        //Checking if response has been provided or not
                if(empty($db_resp) || $db_resp<=0){
                    header("location:enquiry.php");
               echo 'Your Enquiry is still being processed';
                }
                else
                {
                    header("location:responsecheck.php");
                }
            }
            else
            {
               echo 'Incorrect Password!' ;
            }
        }
        else
        {
            echo 'Please check your Details';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check on Enquiry</title>
</head>
<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(108,109,253,255) 35%, rgba(37,133,252,255) 100%);">
    
    <div class="container">
     
        <form method="post" class="form" name="check_form" action="http://localhost:3000/php/responsecheck.php">    
    
           
            <div class="input">
                <tr>    
                    <td>    
                        <h2>Check on Enquiry</h2>  
                    </td>    
                </tr>    

                <table>    
                    <tr>    
                        <td>    
                            <input type="text" name="username" class="input-field" placeholder="Name">    
                        </td>    
                    </tr>
                    <tr>    
                        <td>    
                            <input type="email" name="email" class="input-field" placeholder="email@gmail.com">    
                        </td>    
                    </tr>    
             </div>   
                    <tr>    
                        <td>    
                          <input type="submit" class="submitbtn" value="Check" name="submitbtn">
                          <input type="reset" class="resetbtn" value="Reset">      
                          
                          <tr>
                            <td style="padding-top: 10px;">
                                <a href="http://localhost:3000/enquiry.html">Back</a>
    
                              </td>
                          </tr>
                          
                        </td>    
                    </tr>             
                </table>   
           
        </form>   

    </div>
     
    <style>

        form{
            width: 350px;
            height: 350px;
            margin: 100px auto;
            border-radius: 5px;
            background-color: lightgrey;
        }
        
        .container .input{
        display: flex;
        flex-direction: column;
        align-items: center;
        }
        
        .container .input .input-field{
        margin: 18px 0;
        font-size: 15px;
        padding: 5px;
        border-radius: 5px;
        width: 100%;
        }
        
        .container .submitbtn .resetbtn{
            background-color: purple;
            color: white;
            padding: 6px 20px;
            border-radius: 5px;
            font-size: 18px;
        }

        .enq-input-field{
            margin: 18px 0;
            font-size: 15px;
            padding: 5px;
            border-radius: 5px;
            width: 100%;
            height: 50px;
        }
        
        
            </style>

</body>
</html>



