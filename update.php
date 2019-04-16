
<?php print_r($_POST);?>
<?php


include "../library/attachments.php";

 $attachment['att_name']=$_POST['att_name'];
$attachment['filename']=$_POST['filename'];
  
 
  if(updateattachments($id,$attachment)){
     header("location:viewlist.php");
  }

  
  else{
     echo"cannot added";
}
   
?>