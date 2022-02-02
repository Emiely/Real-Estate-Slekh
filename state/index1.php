
<?php
include "header1.php";
include "inc/db.php";

?>
 
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
$name=$_POST['c_name'];
$email=$_POST['c_email'];
$phone=$_POST['c_phone'];
$sms=$_POST['c_sms'];




$sql ="INSERT INTO contact (contact_name, contact_email, contact_phone, contact_sms)VALUES('$name','$email','$phone','$sms')";


    
     
    if($conn->query($sql)===TRUE)
    {
      
       
    }
    else
    {
    echo "table didn't contact yet".$conn->connect_error;
    }
    
}

?>

<style>

@media(max-width: 500px){
    .head-bottom p {
        opacity: 0.7;
        font-size: 2rem;
        margin: 35px;
    }
    .heading {
        font-size: 3rem;
    }

   
}



</style>


  <!--the start

<?php
session_start();

?>
-->

  <!-- header section starts  -->


<br><br><br><br>


<!-- header section ends -->
<img class="vew" style="height:530px;" src="images/image2.jpg"  style=" width: 100%;" /> 
<div class = "head-bottom flex">
<h1 class="heading"> <span> مرحبا بك </span>  في عقارات الصليخ الجديد </h1>
    <p>يعمل وكلاء العقارات في إيجاري لتحسين الروابط بين البائعين والمشترين بالإضافة إلى تزويد المستأجرين بمنازل بأسعار معقولة للإيجار في العراق.</p>
    <button type = "button" class = "head-btn">ابحث عن عقارك</button>
</div>

<section class = "customers" id = "customers">
    <div class = "sec-width">
        <div class = "title">
            <h2>تصفح العقارات حسب البلدة في بغداد</h2>
        </div>
        <div class = "customers-container">
            <!-- single customer -->
            <a href="section_state.php?section=2" class="vcex-icon-box-link">
            <div class = "customer">
           
                <h3>حي الصليخ</h3>
                <p>حي الصليخ هي إحدى مناطق جانب الرصافة من مدينة بغداد في العراق والتابعة لقاطع الأعظمية ، وتقع فيها المدرسة الثانوية المتميزة الكبيرة </p>
                <img src = "images/sleek.jpg" alt = "customer image">
               
            </div>
        </a>
            <!-- end of single customer -->
            <!-- single customer -->
            <a href="section_state.php?section=3" class="vcex-icon-box-link">
            <div class = "customer">
             
                <h3>حي القاهرة</h3>
                <p>حي القاهرة أحد أحياء قضاء الأعظمية، في قاطع الرصافة الثانية، شمال مدينة بغداد، أُنشئ منذ بداية الخمسينات من القرن العشرين.</p>
                <img src = "images/kahra2.jpg" alt = "customer image">
                
            </div>
        </a>
            <!-- end of single customer -->
            <!-- single customer -->
            <a href="section_state.php?section=1" class="vcex-icon-box-link">
            <div class = "customer">
                
                <h3> حي البساتين</h3>
                <p>البساتين حى هام يقع جنوب شرق القاهرة جمهورية مصر العربية وتحدها احياء هامة هى: المعادي ودار السلام.</p>
                <img src = "images/bsaten.jpg" alt = "customer image">
            
            </div>
        </a>
            <!-- end of single customer -->
              <!-- single customer -->

               <a href="section_state.php?section=5" class="vcex-icon-box-link">
              <div class = "customer">
                  
                  <h3>  الوزيرية</h3>
                  <p>الوزيرية منطقة تقع في وسط مدينة بغداد ، وإلى الجنوب من منطقة الاعظمية ، قرب منطقة الكسرة وهي تتبع قضاء الاعظمية من الناحية الإدارية.</p>
                  <img src = "images/bsaten.jpg" alt = "customer image">
              
              </div>
          </a>
              <!-- end of single customer -->
                <!-- single customer -->
                <a href="section_state.php?section=4" class="vcex-icon-box-link">
            <div class = "customer">
                
                <h3>  الأعظمية</h3>
                <p> الأعظمية مدينة الإمام الأعظم أبو حنيفة والتي سميت نسبة لاسمه حيث دفن فيها وهي مركز قضاء الأعظمية وتقع شمال مركز مدينة بغداد على الجانب الشرقي لنهر دجلة.</p>
                <img src = "images/bsaten.jpg" alt = "customer image">
            
            </div>
        </a>
            <!-- end of single customer -->

                  <!-- single customer -->
                  <a href="#" class="vcex-icon-box-link">
                    <div class = "customer">
                        
                        <h3>  بغداد</h3>
                        <p>بغداد عاصمة جمهورية العراق، ومركز محافظة بغداد.، ما يجعلها اكبر مدينة في العراق  وتُعد المدينة المركز الاقتصادي والإداري والتعليمي في الدولة.</p>
                        <img src = "images/bsaten.jpg" alt = "customer image">
                    
                    </div>
                </a>
                    <!-- end of single customer -->
        </div>
    </div>
</section>

<section class = "rooms sec-width" id = "rooms">
        <div class = "title">
            <h2>rooms</h2>
        </div>
        <div class = "rooms-container">
            <!-- single room -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "images/states/vl4.jpg" alt = "room image">
                </div>
                <div class = "room-text">
                    <h3>فيلا</h3>
                
                    <p>يوجد لدينا فيلا الأحلام التي تبحث عنها</p>
                    
                    <p class = "rate">
                        <span>$4000 /</span> 
                    </p>
                    <a href="contact1.php"><button type = "button" class = "btn">احجز الآن</button></a>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "images/states/mbna.jpg" alt = "room image">
                </div>
                <div class = "room-text">
                    <h3>مباني سكنية</h3>
                    
                    <p>إن البناء العمودي يمتاز بسرعة التنفيذ لأعداد كبيرة من الوحدات السكنية مقارنة بالنمط الأفقي</p>
                    
                    <p class = "rate">
                        <span>$1000 /</span>
                    </p>
                    <a href="contact1.php"><button type = "button" class = "btn">احجز الآن</button></a>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "images/states/bn1.jpg" alt = "room image">
                </div>
                <div class = "room-text">
                    <h3>متاجر</h3>
                   
                    <p>تتضمن متاجر تتالف من 3 طوابق وبمساحة بناء تقدر بـ28 الف متر مربع، متضمنا متاجر وصالات سينما وصالة العاب داخلية وهايبر ماركت ومطاعم ومقاعي ومواقف سيارات.

</p>
                   
                    <p class = "rate">
                        <span>$3000 /</span> 
                    </p>
                    <a href="contact1.php"><button type = "button" class = "btn">احجز الآن</button></a>
                </div>
            </article>
            <!-- end of single room -->
             <!-- single room -->
             <article class = "room">
                <div class = "room-image">
                    <img src = "images/states/mk2.jpg" alt = "room image">
                </div>
                <div class = "room-text">
                    <h3>مكاتب</h3>
                   
                    <p> تسمح المكاتب للمنطقة بتقديم دعم أفضل لحكومة العراق وللعمال وأصحاب العمل في تعزيز العمل</p>
                    
                    <p class = "rate">
                        <span>$1500 /</span> 
                    </p>
                    <a href="contact1.php"><button type = "button" class = "btn">احجز الآن</button></a>
                </div>
            </article>
            <!-- end of single room -->
        </div>
    </section>
<div class = "book">
    <h1>عقارات الصليخ الجديد</h1>
    <form class = "book-form" action="user_search.php" method="post">
        <div class = "form-item">
            
                <select class="form-control form-control-sm slider-line-height40"  name="city">
                <option value="2" class="slider-line-height"   name="section_name">حي الصليخ</option>
                <option value="1" class="slider-line-height"   name="section_name">حي البساتين</option>
                <option value="3" class="slider-line-height"   name="section_name">حي القاهرة</option>
                <option value="4" class="slider-line-height"   name="section_name">الأعظمية</option>
                <option value="5" class="slider-line-height"   name="section_name">الوزيرية</option>
                  </select>
        </div>
        <div class = "form-item">
            <select name="type" class="form-control form-control-sm slider-line-height40">
                <option value="">النوع</option>
         <option value="إيجار">إيجار</option> <option value="بيع"> بيع</option> 
         <option value="تم البيع"> تم البيع</option> <option value="شراء"> شراء</option>		
                   </select>
        </div>
        <div class = "form-item">
            <select  name="cat" class="form-control form-control-sm slider-line-height40">
                <option value="">القسم</option>
          <option value="شقق">شقق</option>			
                                          <option value="عمارات">عمارات</option>					
                                                  <option value="فيلا">فيلا</option>							
                                                   <option value="مبنى سكني">مبنى سكني</option>								
                                                       <option value="متجر">متجر</option>	
                                                    <option value="مكاتب">مكاتب</option>				
    
          </select>
          
        </div>
        <button type="submit" name="user_search"  class="btn ">بحث</button>
    </form>
</div>




<?php


include "inc/db.php";


?>



<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> اتصل </span> بنا </h1>

    <div class="row" style=" padding:2rem 3.5rem;">

        <form action="<?php echo ($_SERVER["PHP_SELF"]);?>"  method="post">
            <input type="text" placeholder="الاسم" class="box" name="c_name">
            <input type="email" placeholder="البريد الإلكتروني" class="box" name="c_email">
            <input type="tel" placeholder="الرقم" class="box" name="c_phone">
            <textarea name="" class="box" placeholder="الرسالة" id="" cols="30" rows="10" name="c_sms"></textarea>
            <input type="submit" value="أرسل الرسالة" class="btn" >
        </form>

        <div class="image">
            <img src="images/caal.jpg"  alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->


<?php


include "footer.php";


?>
