
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



    // if(isset($_POST['send']))
    // {
    //   $mail="almhmdt416@gmail.com";
    //   $subject="phone :".$phone;
    //   $msg="message :".$sms;
      
    //   mail( $mail, $subject, $msg);
    //   echo "<h6>done the send </h6>";
    //   echo '< meta http-equiv="refresh" contact="2; url=callus.php" />';
       
    // }
    else
    {
    echo "table didn't contact yet".$conn->connect_error;
    }
    
}

?>

<br><br><br><br><br><br>
  <!-- contact section starts  -->

<section class="contacts" id="contacts">

<h1 class="heading"> <span>اتصل</span> بنا </h1>


<div class="row">

    <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13324.999838063291!2d44.381557774434036!3d33.39064240856632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1557784505346ffb%3A0x7167f1116d816c67!2z2KfZhNi12YTZitiu2Iwg2KjYutiv2KfYr9iMINin2YTYudix2KfZgg!5e0!3m2!1sar!2s!4v1626340472795!5m2!1sar!2s" allowfullscreen="" loading="lazy"></iframe>

    <form  action="<?php echo ($_SERVER["PHP_SELF"]);?>"  method="post">
        <h3>تواصل معنا واحجز عقارك المناسب</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" class="form-control" placeholder="الاسم"  name="c_name">
        </div>
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" class="form-control" placeholder="الايميل" name="c_email">
        </div>
        <div class="inputBox">
            <span class="fas fa-phone"></span>
            <input type="tel"  class="form-control" placeholder="الرقم" name="c_phone">
        </div>

        <div class="inputBox">
            <span class="fas fa-sms"></span>
            <textarea type="text"  cols="43" rows="10"  class="form-control"   placeholder="Enter message" name="c_sms" >
            </textarea> 
        </div>
        


        <input type="submit" value=" إرسال" class="btn" style="margin: 10px 0;
    font-size: 17px;
    border: 1px solid #f5af47;
    background: transparent;
    padding: 7px 20px;
    background: #333;
    color: #fff;
    cursor: pointer;
    transition: var(--transition);
    border-radius: 30px;">
    </form>

</div>

</section>

<!-- contact section ends -->

<?php
//footer
include "footer.php";
?>