<?php
    include 'connect.php';
    
    if(isset($_GET['deleteID']))
    {

        $ide = $_GET['deleteID'];
        $mysql="delete from `personne` where id = $ide";

        $result = mysqli_query($con,$mysql);

        if($result)
        {
            echo "deleted successfully"; 
            header("index.php");
        }
    }
?>