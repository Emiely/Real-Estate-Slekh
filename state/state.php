<?php

include "header1.php";
include "inc/db.php";

?>
<br><br><br><br><br>
<br><br>



<style>
  .f-state input[type = "submit"]{
    margin: 18px 0 0 0;
    background: var(--dark);
    color: #fff;
   
}
.f-state  label,.f-state  input ,.f-state select{
    width: 100%;
}
.f-state label ,.f-state select,.f-state option{
    font-weight: 600;
    word-spacing: 5px;
    padding-bottom: 8px;
}
.f-state input:not(.btn){
    margin: 4px 0 16px 0;
    padding: 12px 15px;
    border-radius: 5px;
    font-size: 17px;
    border: 1px solid rgb(241, 196, 144);
}
.f-state input:focus{
    outline: 0;
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.4);
   
}

.f-state select:not(.btn){
    margin: 4px 0 16px 0;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 17px;
    border: 1px solid rgb(241, 196, 144);
}
.f-state select:focus{
    outline: 0;
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.4);
}
</style>

<section class=" text-center " style=" padding: 45px;background:#f7f7f7;" >
  <div class="container">
    
    <h1 class="heading"> <span>مرحبا بك في </span> عقارات الصليخ الجديد </h1>
      <div class="who"  style="color:black; font-size: 2rem;">
      <p> يعمل وكلاء العقارات في الصليخ الجديد لتحسين الروابط بين البائعين والمشترين </p> 
      <p> بالإضافة إلى تزويد المستأجرين بمنازل بأسعار معقولة للإيجار في العراق </p> 
       
      </div>
 <!--start search-->

     
 <form  class ="f-state " action="user_search.php" method="post" style=" margin-top: 25px;">
     
              
        <div class="form-group ">
       <select class="form-control form-control-sm slider-line-height40"  name="city">
       <option value="2" class="slider-line-height"   name="section_name">المنطقة</option>
       <option value="2" class="slider-line-height"   name="section_name">حي الصليخ</option>
       <option value="1" class="slider-line-height"   name="section_name">حي البساتين</option>
       <option value="3" class="slider-line-height"   name="section_name">حي القاهرة</option>
       <option value="4" class="slider-line-height"   name="section_name">الأعظمية</option>
       <option value="5" class="slider-line-height"   name="section_name">الوزيرية</option>
         </select>
      
     


        <div class="form-group">
          <select name="type" class="form-control form-control-sm slider-line-height40">
             <option value="">النوع</option>
      <option value="إيجار">إيجار</option> <option value="بيع"> بيع</option> 
      <option value="تم البيع"> تم البيع</option> <option value="شراء"> شراء</option>		
    			</select>
        </div>

        <div class="form-group ">
          <select name="cat" class="form-control form-control-sm slider-line-height40">
            <option value="">القسم</option>
      <option value="شقق">شقق</option>			
      								<option value="عمارات">عمارات</option>					
                      						<option value="فيلا">فيلا</option>							
                               				<option value="مبنى سكني">مبنى سكني</option>								
                                       			<option value="متجر">متجر</option>	
                                        		<option value="مكاتب">مكاتب</option>				

      </select>
        </div>

        

        <div class="form-group ">
          <button type="submit" name="user_search" class="btn">بحث</button>
        </div>
      </div>
      </form>
  
  </div>
</section>

<!-- start state 
 -->
 <?php
if(isset($_POST['user_search'])){
$city=$_POST['city'];
$cat=$_POST['cat'];
$type=$_POST['type'];
// echo $cat;
// echo $type;


//db select

$sql= " SELECT * FROM states  WHERE  state_type='$cat' and  state_action='$type'" ;

$result = $conn->query($sql);

if($result->num_rows>0){
    //brings data
   echo '<div class="row tab1" style="  background:#f7f7f7;">';
    while($row=$result->fetch_assoc()){
      $_SESSION['d_id']=$row['stat_id'];
     // echo "no". $_SESSION['d_id'];

        echo "

       
        <div id='state1' class='col'>
       
        
        
        
        <img id='g1' src='images/states/".$row['state_image']."'>
        <h1>".$row['state_name']."</h1>
        <hr>
        <h1>".$city."</h1>
        <hr>
        <h2>".$row['state_type']."</h2>
        <hr>
        <h2>".$row['state_action']."</h2>
      
      
        <p class='text text-center'> <a href='state_detailes.php' class='btn btn-warning '>تفاصيل العقار</a></p>
        </div>
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

