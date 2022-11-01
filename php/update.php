<?php
include 'index.php';

  
if(isset($_POST['updatebtn'])){
    $resp = $_POST['updateResponse'];
    $id = $_GET['updateid'];

    $sql =  "UPDATE enquiries SET response = '$resp' WHERE id = $id";
    $result = mysqli_query($con,$sql);

    if($result){
     header('location:admin.php');
    }
    else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div class="container">
  <form method="POST">

  <div class="row">
    <div class="col-25">
      <label for="subject">Subject:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="updateResponse" placeholder="Response" style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" name="updatebtn" value="Update">
  </div>
  </form>
</div>
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</body>
</html>