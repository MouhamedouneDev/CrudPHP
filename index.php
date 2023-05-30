<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="btn">
            <button id="btnAdd"><a href="register.php">AJOUT</a></button>
        </div>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            <?php 
                include "connect.php";

                $mysql = "select * from `personne`";

                $result = mysqli_query($con,$mysql);

                if($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$name.'</th>
                        <th>'.$email.'</th>
                        <th>'.$mobile.'</th>
                        <th>'.$password.'</th>

                        <th> 
                            <button name="update">
                                <a href="update.php?updateID='.$id.'">Modifier</a>
                            </button>
                            
                            <button name="delete">
                                <a href="delete.php?deleteID='.$id.'">Supprimer</a>
                            </button>
                        </th>
                        </tr>';
                    }
                }
               
            ?>
        </table>
    </div>

    <script src="index.js"></script>

</body>

</html>