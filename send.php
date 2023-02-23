<?php
         require_once('./inc/auth.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <?php
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                 

                    $data = "INSERT INTO `alexa`.`alexa_form` (`name`, `email`, `message`)";
                    $data .= "VALUES ('$name', '$email', '$message')";
                    
                    $result = mysqli_query($connection, $data);

                    if(!$result){
                              echo 'xatolik'.$data. "<br>" .$connection->error;
                    }
                    
                    $connection->close();
                    header("location: index.php");
          ?>

          

          
          
</body>
</html>