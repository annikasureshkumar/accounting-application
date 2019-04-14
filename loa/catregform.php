<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
 
  <section class="section is-mobile">
    <div class="container">


     <!-- sidebar menu -->
<!--<div class="columns is-mobile">
 <div class="column is-one-quarter">
<aside class="menu">
  <ul class="menu-list has-text-centered has-background-light">
    <li><a href="accountlist.php"><strong>Accountant info</strong></a></li>
    <li><a href="regform.php"><strong>Registration</strong></a></li>
    <li><a href="catregform.php"  class="is-active"><strong>Categories
    </strong></a></li>
    <li><a href="#"><strong>Account info</strong></a></li>
  </ul> 
</aside>
</div>
 ending sidebar menu 
table 
<div class="column is-two-thirds is-mobile"> -->
<div class="columns">
      <div class="column"> 
      <h1 class="title has-text-centered">Category Information</h1>
      <br>



      <form action="catreg.php" method="post">
      


<!-- 1st input  -->
<div class="field is-horizontal">
  <div class="field-label is-normal">
  <label class="label">Category Name</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <p class="control">
        <input class="input" type="text" placeholder="Enter Category Name" name="catname" required>

      </p>
    </div>
 
     </div>
</div>

 <!-- 2nd input text -->
 <div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Description</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <p class="control">
        <textarea class="textarea" type="text" placeholder="Enter the Description of the category" name="description" required></textarea>
      </p>
    </div>
  </div>
</div>
<!-- 4th input text -->
      <!-- <div class="field is-horizontal">
  <div class="field-label is-normal">
  <label class="label">Account Categories</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control">
      <div class="select  is-pulled-left has-text-left">
      <select name="accategories" id="select" required>
        <option >select here</option>
        <option value="1">Assests Account</option>
        <option value="2">Expenses Account</option>
        <option value="3">Revenue or Income</option>
        <option value="4">Liabilities Account</option>
        <option value="5">Equity Account</option>
     </select>  
     </div>
     </p>
    </div>
  </div> 
 </div> -->
 <br>
 <br>
 <div class="field is-horizontal">
 <div class="field-label is-normal"> 
<div class="field is-grouped is-pulled-right">
<div class="control">
 <input type="reset" value="Clear" class="button is-danger">
  </div>
  <div class="control">
  <input type="submit" value="Submit" class="button is-link">  </div>
</div>
</div>
</div>
<br> <br>
  </div> 
 
  </form>
 
   </div>

</section>

  </body>
</html> 