<?php
print_r($_POST);
include "includes/config.php";
include "library/accountant.php";
    $account['accname']=$_POST['accname'];
    $account['balance']=$_POST['balance'];
    $account['mobile']=$_POST['mobile'];
    $account['accategories']=$_POST['accategories'];
    if(insertaccountant($account)){
        header("Location:accountlist.php?accountcreated=1");
    }
    else{
        echo "Error" .$conn->connect_error;
    }
?>
