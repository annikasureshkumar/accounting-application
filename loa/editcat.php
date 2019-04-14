
<?php 
include("includes/config.php");
$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
echo "Database Connection Error".$conn->connect_error;
}else{
    $getcatdetails="select * from category where CAT_ID=".$_GET['id'];
    $category=$conn->query($getcatdetails);
    //var_dump($users);
    $cat=mysqli_fetch_assoc($category);
   // print_r($user);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Accounting App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="section">
        <div class="row">
        <form action="updatecategory.php" method="POST">
        <div class="field is-horizontal">
             <div class="field-label is-normal">
             <label class="label">Category Name</label>
        </div>
        <div class="field-body">
        <div class="field">
            <p class="control">
              <p class="control">
                  <input class="input" type="text" placeholder="Enter Category Name" name="catname"  
                  value="<?php echo $cat['CAT_NAME'];?>" required>
             </p>
         
            </p>
  
      </div>
      </div>
      </div>
<!-- 2nd input  -->
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Description</label>
  </div>
    <div class="field-body">
      <div class="field">
        <p class="control">
          <p class="control">
             <input class="input" type="text" placeholder="Enter Your Category Description" name="description"
              value="<?php echo $cat['DESCRIPTION'];?>" required>
           
          </p>
        </p>
      </div>
   </div>
</div>
<!-- 3rd input -->
     
       </div>

 <br>
 <br>

                    <div class="level-right">
                        <div class="level-item">
                          <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button is-danger">Cancel</a>

                        </div>
                          <div class="level-item">
                              <input type="submit" class="button is-success" value="Update">
                          </div>
                       </div>



        <input type="hidden" name="CATID" value="<?php echo $cat['CAT_ID']?>">
        </form>
</div>

</div>
</body>
</html>
