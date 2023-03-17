<?php
include 'connect.php';
?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['naame'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['passw'];

    //     $sql = "INSERT INTO crudop(null,naame,email,mobile,passw)
    //    VALUES (null,'$naame','$email','$mobile','$passw')";
    $sql = "INSERT INTO crudop(id,name,email,mobile,password)
   VALUES (null,'$naame','$email','$mobile','$passw')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

        header('location:display.php');
    } else {
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
        <form method="post">
            <div class="mb-3">
                <label class="form-label">name</label>
                <input type="text" class="form-control" name="naame">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="passw">
            </div>
            <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>