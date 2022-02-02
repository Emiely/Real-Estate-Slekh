<?php

include "header1.php";
include "inc/db.php";

?> 
<br><br><br><br><br><br><br>




<?php
if(isset($_POST['user_search'])){
 
    $cat=$_POST['cat'];
 
    // echo $cat;
    // echo $type;
    
    
    //db select
    
    $sql= " SELECT * FROM states  WHERE  state_type='$cat' " ;
    
    $result = $conn->query($sql);
    
    if($result->num_rows>0){
        //brings data
       echo '<div class="row tab1" style=" display: block;width: 100%; background:#f7f7f7;margin: 0px; text-align: center;">';
        while($row=$result->fetch_assoc()){
        $_SESSION['d_id']=$row['stat_id'];
         // echo "no". $_SESSION['d_id'];
         $d=$row['stat_id'];
            echo "
    
           
            <div id='state1' class='col'>
           
            
            <center>
            
            <img id='g1' src='images/states/".$row['state_image']."' style=' width: 150px;height: 150px;border-radius: 50%;'>
            <h1 style='color:#f5af47; margin-top: 8px;'>".$row['state_name']."</h1>
            <hr>
            
            <hr>
            <h2>".$row['state_type']."</h2>
            <hr>
            <h2 style='color:#f5af47;'>".$row['state_action']."</h2>
          
          
            <p class='text text-center'> <a href='state_detailes2.php?qid=$d' class='btn btn-warning '>تفاصيل العقار</a></p>
            </div>
            </center>
            ";
        }
        echo '</div>';
    }
    
    }
?>


<?php
//footer
include "footer.php";
?>