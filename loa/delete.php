<?php print_r($_GET);?>
<?php
    echo "Request Received";
    include "includes/config.php";
    //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
            if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }
            else{
                include "library/accountant.php";
            $delete="delete from list_of_accounts where ACC_ID=".$_GET['id'];
                //echo $sql;
                 if($conn->query($delete)===TRUE){
                    header("Location:accountlist.php");
                }
                 else{
                 echo "Error" .$conn->connect_error;
                 }
             }
?>