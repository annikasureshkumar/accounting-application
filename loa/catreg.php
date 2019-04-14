<?php
print_r($_POST);
include "includes/config.php";
include "library/category.php";
    $cat['catname']=$_POST['catname'];
    $cat['description']=$_POST['description'];
    if(insertcategory($cat)){
       header("Location:cattable.php?accountcreated=1");
    }
        else{
        echo "Error" .$conn->connect_error;
    }
?>