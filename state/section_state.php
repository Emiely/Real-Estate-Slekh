<?php

include "header1.php";
include "inc/db.php";

?> 
<br><br><br><br><br><br><br>


<?php
$sid=$_REQUEST['section'];
//echo $_REQUEST['section'];
if ($sid == 1){
    $section= "حي البساتين";
    $_SESSION['section']=$section;
   // echo $section;
}
elseif($sid==2){
    $section= "حي الصليخ";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($sid==3){
    $section= "حي القاهرة";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($sid==4){
    $section= "الأعظمية";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($sid==5){
    $section= "حي الوزيرية";
    $_SESSION['section']=$section;
    //echo $section;
}

$sql= " SELECT * FROM states  WHERE  section_id='$sid'" ;

$result = $conn->query($sql);

if($result->num_rows>0){
    //brings data
   echo '<div class="row tab1" style=" display: block;width: 100%; background:#f7f7f7;margin: 0px; text-align: center;">';
    while($row=$result->fetch_assoc()){
     // $_SESSION['d_id']=$row['stat_id'];
     // echo "no". $_SESSION['d_id'];
     $d=$row['stat_id'];
    //echo  "***************".$d."***************";
        echo "

       
        <div id='state1' class='col'>
       
        
        
       
        <img id='g1' src='images/states/".$row['state_image']."'  style='width: 150px;height: 150px;border-radius: 50%;'>
        <h1 style='color:#f5af47; margin-top: 8px;'>".$row['state_name']."</h1>
        <hr>
        <h1>".$section."    </h1>
        <hr>
        <h2>".$row['state_type']."</h2>
        <hr>
        <h2 style='color:#f5af47;'>".$row['state_action']."</h2>
      
      

        <p class='text text-center'> <a href='state_detailes1.php?qid=$d' class='btn btn-warning '>تفاصيل العقار</a></p>
        </div>
        ";
    }
    echo '</div>';
}


echo '</div>';
$conn->close();

?>












<?php
include "footer.php";


?>