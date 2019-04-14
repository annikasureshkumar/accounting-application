<?php
include("includes/config.php");
$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
//$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    
    $getlist_of_accounts="select * from list_of_accounts"; 
    $users=$conn->query($getlist_of_accounts);
    if($users->num_rows>0){
        echo '<table class="table">';
        echo '<thead>
            <tr>
            <th>Account ID</th>
            <th>USER NAME</th>
            <th>Balance</th>
            <th>PHONE </th>
            <th>Category</th>
            <th>Actions </th>
            
            </tr>
        </thead>
        <tbody>';
        while($user=mysqli_fetch_assoc($users)){
            echo "<tr>";
            echo "<td>".$user['ACC_ID']."</td>";
            echo "<td>".$user['ACC_NAME']."</td>";
            echo "<td>".$user['BALANCE']."</td>";
            echo "<td>".$user['PHONE']."</td>";
            echo "<td>".$user['CATEGORY_ID']."</td>";
            echo '<td>
                <a href="editdetails.php?id='.$user['ACC_ID'].'" class="button is-info">Edit</a>
                <a href="deleteuser.php?id='.$user['ACC_ID'].'" class="button is-danger">Delete</a></td>';
            
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
