<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="container">
        <div class="register">
            <form action="" method="POST">
                <h1>Information</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="mobile" placeholder="Mobile">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Enregistrer">
            </form>


            <?php

                    include "connect.php";

                if(isset($_POST["submit"]))
                {
                    $name = $_POST["name"];
                    $mobile = $_POST["mobile"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    $sql  = "insert into `personne` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";

                    $result = mysqli_query($con,$sql);

                    if($result)
                    {
                        echo "SUCCESSFULLY";
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>