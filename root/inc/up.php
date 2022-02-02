<?php
session_start();

if(isset($_POST['save-image']))
{

 
   $file_name=time()."_".$_FILES['file1']['name'];
   $_SESSION['image_name']=$file_name;
   $target="../images/".$file_name;
   move_uploaded_file($_FILES['file1']['tmp_name'],$target);
   header("location:../state/add_state.php");
}
?>