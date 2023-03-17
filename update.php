<?php
include 'connect.php';
?>
<?php
$id=$_Get['updateid'];
$sql = "SELECT * FROM crudop WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name=$_POST['naame'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $pass=$_POST['passw'];


if(isset($_POST['submit'])){
  $name=$_POST['naame'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $pass=$_POST['passw'];
  
  $sql= "update crudopset id=$id, naame ='$naame',email='$email',mobile='$mobile',passw='$passw' where id=$id";
   $result = mysqli_query($conn,$sql);
  if($result){

    header ('location:display.php');
  }
  else{
    die(mysqli_error($conn));
  }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    <title>formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
   <form methode="post">
   <div class="mb-3">
    <label  class="form-label" >name</label>
    <input type="text" class="form-control" name="naame" 
    value=<?php echo $naame; ?>  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value=<?php echo $email; ?>  > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile" value=<?php echo $mobile ;?>  >
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="passw" value=<?php echo $passw; ?> >
  </div>
  <button type="submit" class="btn btn-secondary" name="submit">Update</button>
</form>
    
   </div>
  </body>
</html>