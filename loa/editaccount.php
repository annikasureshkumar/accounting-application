<?php 
include("includes/config.php");
include("library/category.php");
$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
echo "Database Connection Error".$conn->connect_error;
}else{
    $getaccountdetails="select * from list_of_accounts where ACC_ID=".$_GET['id'];
    $list_of_accounts=$conn->query($getaccountdetails);
    //var_dump($users);
    $account=mysqli_fetch_assoc($list_of_accounts);
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
<div class="container has-background-light">
<div class="section">
        <div class="row">
        <form action="updateaccount.php" method="POST">
        <h1 class="title has-text-center">Account Editing</h1>
        <div class="field is-horizontal">
             <div class="field-label is-normal">
             <label class="label">Account Name</label>
        </div>
        <div class="field-body">
        <div class="field">
            <p class="control">
              <p class="control has-icons-left has-icons-right">
                  <input class="input" type="text" placeholder="Enter Your Account Name" name="accname"  value="<?php echo $account['ACC_NAME'];?>" required>
             </p>
         
            </p>
  
      </div>
      </div>
      </div>
<!-- 2nd input  -->
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Mobile No.</label>
  </div>
    <div class="field-body">
      <div class="field">
        <p class="control">
          <p class="control has-icons-left has-icons-right">
             <input class="input" type="text" placeholder="Enter Your Mobile Number" name="mobile" value="<?php echo $account['PHONE'];?>" required>
               <span class="icon is-small is-left">
                   <i class="fas fa-phone"></i>   
               </span>
          </p>
        </p>
      </div>
   </div>
</div>
 <!-- 3rd input text -->
     <div class="field is-horizontal">
         <div class="field-label is-normal">
           <label class="label">Balance</label>
          </div>
         <div class="field-body">
           <div class="field">
             <p class="control">
               <p class="control has-icons-left has-icons-right">
                 <input class="input" type="text" placeholder="Enter Amount" name="balance"  value="<?php echo $account['BALANCE'];?>" required>
                 <span class="icon is-small is-left">
                   <i class="fas fa-rupee-sign"></i>   
                 </span>
               </p>
             </p> 
           </div>
     </div>
       </div>
<!-- 4th input text -->
 <div class="field is-horizontal">
    <div class="field-label is-normal">
     <label class="label">Account Categories</label>
    </div>
     <div class="field-body">
       <div class="field">
         <p class="control">
           <div class="select  is-pulled-left has-text-left">
             <select name="accategories" id="select" required>

               <?php 
                $categories=getallcategories();
                foreach ($categories as $category) {
                  echo "<option value='".$category['CAT_ID']."'>".$category['CAT_NAME']."</option>"; 
                }

               ?>
               
               
                </select>  
             </div>
           </p>
          </div>
       </div> 
 </div>
 <br>
 <br>

                    <div class="level-right is-mobile">
                        <div class="level-item">
                          <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button is-danger">Cancel</a>

                        </div>
                          <div class="level-item">
                           <input type="submit" class="button is-success" value="Update">
                          </div>
                    
                    </div>



        <input type="hidden" name="ACCID" value="<?php echo $account['ACC_ID']?>">
        </form>
</div>

</div>
</body>
</html>
