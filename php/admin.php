<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<?php

include 'index.php';

//Query for all elements and getting result 
$sql = "SELECT * FROM enquiries ORDER BY id";
$result = mysqli_query($con,$sql);

?>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Enquiry</th>
            <th scope="col">Response</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>

        <?php
        if ($result){
        while($rows=mysqli_fetch_assoc($result))
        {
          $id = $rows['id'];
          $name = $rows['name'];
          $number = $rows['number'];
          $email = $rows['email'];
          $enquiry = $rows['enquiry'];
          $resp = $rows['response'];
          echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$number.'</td>
                <td>'.$email.'</td>
                <td>'.$enquiry.'</td>
                <td>'.$resp.'</td>
                <td> 
                <button class ="updatebtn" ><a href="update.php?updateid='.$id.'"class="textcolor">Update</a></button>
                <button class ="deletebtn"><a href="delete.php?deleteid='.$id.'" class="textcolor">Delete</a></button>                    
                </td>
            </tr>
           ';
        }
        }
                ?>
        
        </tbody>
      </table>

<?php 
//close connection
mysqli_close($con);
?>

<h3 style="color: white; text-align: right; margin:0; padding-right: 70px; padding-top: 50px;">

<a href="http://localhost:3000/index.html">Logout</a>

</h3> 
<style>
  .updatebtn{
    background-color: seagreen;
  }
  .deletebtn{
    background-color: red;
  }
  .textcolor{
    font-size: 15px;
    color: white;
  }
</style>
</body>
</html>