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
                
                $delete="delete from category where CAT_ID=".$_GET['id'];
                //echo $sql;
                if($conn->query($delete)===TRUE){
                    
                header("Location:cattable.php");                
                }
                else{
                echo "Error" .$conn->connect_error;
                }
            }
    

?>