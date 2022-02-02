<?php

include "header1.php";
include "inc/db.php";

?> 



<br>
<br>
<br>

<br>
<br>
<br>

<br>
<br>
<br>

 <div style="background:#f7f7f7;">


 </div>

    <?php
if(isset($_POST['user_search'])){
$city=$_POST['city'];
$cat=$_POST['cat'];
$type=$_POST['type'];
// echo $cat;
// echo $type;

if ($city == 1){
    $section= "حي البساتين";
    $_SESSION['section']=$section;
   // echo $section;
}
elseif($city==2){
    $section= "حي الصليخ";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($city==3){
    $section= "حي القاهرة";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($city==4){
    $section= "الأعظمية";
    $_SESSION['section']=$section;
    //echo $section;
}
elseif($city==5){
    $section= "الوزيرية";
    $_SESSION['section']=$section;
    //echo $section;
}

/*
$section_name="";
if($city == "1"){
    $section_name="حي البساتين";
}
elesif ($city=="2"){
    $section_name=  'حي الصليخ';
}
elesif ($city=="3"){
    $section_name=  'حي القاهرة';
}
elesif ($city=="4"){
    $section_name=  'الأعظمية';
}else
{
    $section_name=  'الوزيرية';
}

*/
//db select

$sql= " SELECT * FROM states  WHERE  section_id='$city' and state_type='$cat' and state_action='$type'" ;

$result = $conn->query($sql);

if($result->num_rows>0){
    //brings data
   echo '<div class="row tab1" style=" display: block;width: 100%; background:#f7f7f7;margin: 0px; text-align: center;">';
    while($row=$result->fetch_assoc()){
      $_SESSION['d_id']=$row['stat_id'];
     // echo "no". $_SESSION['d_id'];

        echo "

       
        <div id='state1' class='col'>
       
        
        
        
        <img style=' width: 150px;height: 150px;border-radius: 50%;' id='g1' src='images/states/".$row['state_image']."'>
        <h1 style='color:#f5af47; margin-top: 8px;'>".$row['state_name']."</h1>
        <hr>
        <h1>".$section   
        ."</h1>
        <hr>
        <h2>".$row['state_type']."</h2>
        <hr>

        <h2 style='color:#f5af47;'>".$row['state_action']."</h2>
      
        
        <p class='text text-center'> <a href='state_detailes.php' class='btn btn-warning '>تفاصيل العقار</a></p>
        </div>
        ";
    }
    echo '</div>';
}

}
$conn->close();

?>



<?php
//footer
include "footer.php";
?>
