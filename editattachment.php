<?php 

 include "../library/attachments.php";
 $attachment=getattachmentsdetails($_GET['id'])

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATTACHMENT FILE</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
                
<div class="container">
  <div class="section">
    <div class="row">
      <form action="update.php" method="POST">
          <h1 class="title has-text-centered">ATTACHMENT FILE</h1>

         <div class="field">
           <label class="label">Attachment Name</label>
           <input class="input" type="text" id="att_name" name="att_name" value="<?php echo $attachment['Attachment_Name'] ?>">
        </div>

        <div class="field">
          <label class="label"> File Name</label>
          <input class="input " type="text" id="filename" name="filename" value="<?php echo $attachment['File_Name'] ?>">
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal"> 
            <div class="field is-grouped is-pulled-right">

              <div class="control">
                 <input type="submit"  class="button is-info" value="update">
              </div>

              <div class="control">
                  <input type="hidden"  name="ATTACHID" value="<?php echo $attachment['ID']?>">
              </div>
            </div>
          </div>
        </div>
      </div> 
      </form>
    </div>
  </div>
</div>

 </body>
 </html>                                                                           
   
 