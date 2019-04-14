<?php
include "includes/config.php";
$conn = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);    
function insertcategory($cat){
    global $conn;
    $catname=$cat['catname'];
    $description=$cat['description'];
    // $id=$account['ACCID'];
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql= "INSERT INTO category(`CAT_NAME`,`DESCRIPTION`) VALUES('".$catname."','".$description."')";

                if($conn->query($sql)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }
}
function deletecategory($ACC_ID){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
                           }
    else{
        $sql="DELETE FROM list_of_accounts where ACC_ID=".$ACC_ID;
        if($conn->query($sql)===TRUE){

        }
        else{
            return "deleteerror";
        }
    }
}
function updatecategory($CAT_ID,$cat){
    global $conn;
    $catname=$cat['catname'];
    $description=$cat['description'];
    $id=$cat['id'];
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $updatecategory= "UPDATE category SET 
                        CAT_NAME ='$catname',
                        DESCRIPTION = '$description'
                        where CAT_ID = $id
                        "
                        ;
        
        if($conn->query($updatecategory)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }

}
function getcategorydetails($id){
    if($conn->connect_error){
        die("Database Connection Error");
    }

}
function getallcategories(){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql="select * from category";
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