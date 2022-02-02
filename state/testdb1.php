<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstarp-4.css">
</head>
<body>
    
<?php

$servername="localhost";
$username="school";
$password="";
$dbname="root";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
       
    die("Connection faild".$conn->connect_error);
}

else
{

    $sql = "SELECT * FROM school" ;
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0)
{
   
  echo "
 
  <table class='table table-striped' style='dir:rtl'>
  <tr>
  
 
  

  <th>المدرسة</th>
  <th>الاستاذ</th>
  </tr>
  ";
  while($row=$result->fetch_assoc()){
  echo "
  <tr>
  
  
  

  <td>".$row['name']."</td>
  <td>".$row['teacher']."</td>
  
  
  </tr>
  ";



        }
      echo '</table>' ;
          }
else
{
  echo "user name or password is wrong ";

}

}

$conn->close();

}

?>

</body>
</html>