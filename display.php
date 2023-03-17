<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary mt-5">
            <a href="user.php" class="text-light">Ajouter Utilisateur</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM crudop";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = isset($row['id']);
                        $naame = isset($row['naame']);
                        $email = isset($row['email']);
                        $mobile = isset($row['mobile']);
                        $passw = isset($row['passw']);
                        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $naame . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $passw . '</td>
        <button class="btn btn-primary">
        <a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
        <button class="btn btn-danger">
        <a href="delete.php?deleteid=' . $id . ' " class="text-light">Delete</a></button>
      </tr>';
                    }
                }
                ?>

            </tbody>
        </table>

    </div>
</body>

</html>