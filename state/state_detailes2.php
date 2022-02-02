<?php
//header
include "header1.php";
include "inc/db.php";

?>

<br><br><br><br><br><br><br>



<?php

$ids=$_REQUEST['qid'];

$sql="select * from images where state_id='$ids'";
$result = $conn->query($sql);

if( $result-> num_rows > 0 )
{
    echo '<div class="row" style=" display: flex;width: 100%; background:#f7f7f7;padding: 10px; text-align: center;">';
    
    while($row=$result->fetch_assoc()){
     echo ' <div   class="col" ><img style=" width: 200px;height: 200px;" class="mg_d" src="images/states/'.$row["image_name"].'" alt="" ></div>';

    }

}

echo '</div>';
?>



<!-- bring info -->
<?php
$sql= " SELECT * FROM states  WHERE  stat_id='$ids'" ;

$result = $conn->query($sql);

if($result->num_rows>0){
    //brings data
   echo '<div class="row tab1" style=" display: block;width: 100%; background:#f7f7f7;margin: 0px; text-align: center;">';
    while($row=$result->fetch_assoc()){
     
     // echo "no". $_SESSION['d_id'];

        echo "

       
        <div id='state1' class='col'>
       
        
        
        
        <img  id='g1' src='images/states/".$row['state_image']."' style=' width: 150px;height: 150px;border-radius: 50%;'>
        <h1 style='color:#f5af47; margin-top: 8px;'>".$row['state_name']."</h1>
        <hr>
      
        <hr>
        <h2>".$row['state_type']."</h2>
        <hr>
        <h2>".$row['state_action']."</h2>
        <hr>
        <p style='font-size: 2rem;'> <span style='color : red;font-size: 15px;'>العنوان : </span>".$row['state_address']." </p>
      
        <p style='font-size: 2rem;'> <span style='color : red;'>الوصف : </span>".$row['state_desc']." </p>
       
        </div>
        ";
    }
    echo '</div>';
}


$conn->close();
?>


<style>
    @media (max-width:500px){
.row{
    display: block;
}
}
</style>
<?php
//footer
include "footer.php";
?>