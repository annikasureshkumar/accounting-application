<?php
  echo "Request Received";
//   include "includes/config.php";
 
 include "library/category.php";
              $cat['catname']=$_POST['catname'];
              $cat['description']=$_POST['description'];
              $cat['id']=$_POST['CATID'];  
              if(updatecategory($cat['id'],$cat)){
                 header("Location:cattable.php");
                                            }
                        else{
                           echo "Error" .$conn->connect_error;
                            }        
                  
?>
                
                
           
