<?php
print_r($_POST);
    // echo "Request Received";
    // include "includes/config.php";
    include "library/accountant.php";
                $account['accname']=$_POST['accname'];
                $account['mobile']=$_POST['mobile'];
                $account['balance']=$_POST['balance'];
                $account['accategories']=$_POST['accategories'];
                 $account['id']=$_POST['ACCID'];
                if(updateaccountant($account['id'],$account)){
                // echo  $updateaccount;           
                //echo $sql;                    
                   header("Location:accountlist.php");   
                }
                else{
                    echo "Error" .$conn->connect_error;
                }
?>