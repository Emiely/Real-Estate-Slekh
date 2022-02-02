<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
   <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    
</head>
<body>
    
<?php

$servername="localhost";
$username="icc_db";
$password="English123";
$dbname="icc_db";








 
 $conn= new mysqli($servername,$username,$password,$dbname);
 $conn->set_charset("utf8");
if($conn->connect_error){
       
    die("Connection faild".$conn->connect_error);
}

/* mysql_query("set names 'utf8'");   */
    $sql = "SELECT * FROM school" ;
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0)
{
   
  echo "
 
  <table class='table' >
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


        
$conn->close(); 
   
?>


</body>
</html>