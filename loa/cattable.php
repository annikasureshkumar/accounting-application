<?php include "includes/header.php";?>
<!-- sidebar -->
 <?php
//   include"includes/navigation.php"
   ?>  
<!-- sidebar menu -->
<div class="columns is-mobile">
<div class="column is-one-quarter">
<aside class="menu">
  <ul class="menu-list has-text-centered">
    <li><a href="accountlist.php"><strong>Accountant info</strong></a></li>
    <li><a href="regform.php"><strong>Registration</strong></a></li>
    <li><a href="cattable.php"  class="is-active"><strong>Categories
    </strong></a></li>
    <li><a href="catregform.php"><strong>category info</strong></a></li>
  </ul> 
</aside>
</div>
<!-- ending sidebar menu -->
<!-- table -->
<div class="column is-three-quarters">
<div class="container">



<?php

include "includes/config.php";
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
$conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    
    $getCategory="select * from category"; 
    $category=$conn->query($getCategory);
    if($category->num_rows>0){
        echo '<table class="table">';
        echo '<thead>
            <tr>
            <th>Category ID</th>
            <th>Category NAME</th>
            <th>Description</th>
            <th>Actions </th>
            
            </tr>
        </thead><tbody>';
        while($cat=mysqli_fetch_assoc($category)){
            echo "<tr>";
            echo "<td>".$cat['CAT_ID']."</td>";
            echo "<td>".$cat['CAT_NAME']."</td>";
            echo "<td>".$cat['DESCRIPTION']."</td>";
            echo '<td>
                <a href="editcat.php?id='.$cat['CAT_ID'].'" class="button is-info">Edit</a>
                <a href="deletecat.php?id='.$cat['CAT_ID'].'" class="button is-danger">Delete</a></td>';
            
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








