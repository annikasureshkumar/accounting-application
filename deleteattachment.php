 

<?php print_r($_GET);?>
<?php


$servername="localhost";
 $dbuser="accapp";
 $dbpwd="accapp";
 $dbname="dbattachment";
 
  echo "Request Received";
   // $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
         if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
          }
          else{
  $delete = "DELETE FROM `attachment_file` WHERE ID=".$_GET['id'];
            echo $delete;
                if($conn->query($delete)===TRUE){
                    
            header("Location:viewlist.php");
                }
                
              else{
               echo "Error" .$conn->connect_error;
                }
              }
            ?>

