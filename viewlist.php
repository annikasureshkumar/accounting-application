
  <?php include "header.php"?>; 
 
<?php
include "../library/attachments.php";

$attachments=getallattachments();
 echo '<table class="table">';
    echo '<thead>
    <tr>
    <th>Id</th>
    <th>Attachment Name </th>
    <th>File Name </th>
    <th>Actions </th>
    </tr>
</thead> <tbody>';

while($attachment=mysqli_fetch_assoc($attachments)){
  echo '<tr>';
  echo '<td>'.$attachment["ID"].'</td>';
  echo '<td>'.$attachment["Attachment_Name"].'</td>';
  echo '<td>'.$attachment["File_Name"].'</td>';
  

echo '<td>
       <a href="viewattachments.php?id='.$attachment['ID'].'" class="button is-success">View</a>
        
</td>';
      echo '</tr>';       
}
echo'</tbody>
</table>';
?>
<?php 
mysqli_close($conn);
?>
<?php include "../layout/footer.php"; ?>

