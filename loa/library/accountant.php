<?php
include "includes/config.php";
$conn = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);    
function insertaccountant($account){
    global $conn;
    $accname=$account['accname'];
    $mobile=$account['mobile'];
    $balance=$account['balance'];
    $accategories=$account['accategories'];
    // $id=$account['ACCID'];
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql= "INSERT INTO list_of_accounts(`ACC_NAME`,`PHONE`,`BALANCE`,`CATEGORY_ID`) 
        VALUES('".$accname."','".$mobile."','".$balance."','" .$accategories."')";
                if($conn->query($sql)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }

}
function deleteaccountant($ACC_ID,$account){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql="DELETE FROM list_of_items where ACC_ID=".$accountid;

        if($conn->query($sql)===TRUE){

        }
        else{
            return "deleteerror";
        }
    }
}
function updateaccountant($ACC_ID,$account){
    global $conn;
     $accname=$account['accname'];
     $mobile=$account['mobile'];
     $balance=$account['balance'];
     $accategories=$account['accategories'];
     $id=$account['id'];
  if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $updateaccount= "UPDATE list_of_accounts SET 
        ACC_NAME ='$accname',
        PHONE ='$mobile',
        BALANCE ='$balance',
        CATEGORY_ID ='$accategories'
        where ACC_ID = '$id'
        "
        ;
        if($conn->query($updateaccount)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }

}
function getaccountantdetails($id){
    if($conn->connect_error){
        die("Database Connection Error");
    }

}
function getalllist_of_accounts(){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql="select * from list_of_accounts";
        $list_of_accounts=$conn->query($sql);
        if($list_of_accounts->num_rows>0){
            return $list_of_accounts;
                              }
        else{
            return 0;
        }
    }
}
?>