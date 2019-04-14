 <?php include"includes/header.php"?>
 <!-- sidebar menu -->
<?php include"includes/navigation.php" ?>
<?php
include("library/accountant.php");
$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    
    $getlistofaccounts="select * from list_of_accounts"; 
    $list_of_accounts=$conn->query($getlistofaccounts);
    if($list_of_accounts->num_rows>0){
        echo '<table class="table is-mobile">';
        echo '<thead>
            <tr>
            <th>Account ID</th>
            <th>ACCOUNT NAME</th>
            <th>PHONE</th>
            <th>BALANCE</th>
            <th>CATEGORY ID</th>
            <th>Actions </th>
            
            </tr>
        </thead><tbody>';
        while($account=mysqli_fetch_assoc($list_of_accounts)){
            echo "<tr>";
            echo "<td>".$account['ACC_ID']."</td>";
            echo "<td>".$account['ACC_NAME']."</td>";
            echo "<td>".$account['PHONE']."</td>";
            echo "<td>".$account['BALANCE']."</td>";
            echo "<td>".$account['CATEGORY_ID']."</td>";
            echo '<td>
                <a href="editaccount.php?id='.$account['ACC_ID'].'" class="button is-info">Edit</a>
                <a href="delete.php?id='.$account['ACC_ID'].'" class="button is-danger">Delete</a>
                </td>';
            
            echo "</tr>";
        }
        echo "<tbody>
       
        <table>"; 
    }
    else{
        echo "No Users";
    }
}

?>