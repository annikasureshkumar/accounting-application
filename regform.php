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
            
    <form action="attachment.php" method="POST">
    
   <h1 class="title has-text-centered notification is-primary" >ATTACHMENT FILE</h1>
    
    <div class="field">
        <label class="label">Attachment Name</label>
         <input class="input " type="text" id="att_name" placeholder="Attachment Name" name="att_name">
        </div>

        <div class="field">
          <label class="label"> File Name</label>
            <input class="input " type="text" id="filename" placeholder="filename" name="filename">
            </div>

            <div class="field is-horizontal">
          <div class="field-label is-normal"> 
         <div class="field is-grouped is-pulled-right">
         <div class="control">
          <input type="submit" value="Submit" class="button is-info">
           </div>
           <div class="control">
           <input type="reset" value="cancel" class="button is-danger">  </div>
         </div>
         </div>
         </div>
           </div> 


 </body>
</html>                                                                           