<!DOCTYPE html>
<html lang="en">
<head>

    




    </head>

    <body>



    <?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$domain = $_POST['domain'];
$level = $_POST['level'];


    $mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "client-form");
    
    if ($mysqli === false){
      die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $domain = $_POST['domain'];
    $level = $_POST['level'];


    $sql = "INSERT INTO client (firstName, lastName, email, webDomain, webLevel) 
              VALUES ('$fname', '$lname', '$email', '$domain', '$level')";
        if($mysqli->query($sql) === true){
          echo "Thank you for your submission.";
        } else{
          echo "ERROR: Could not submit form data. " . $mysqli->error;
        }

        $mysqli->close();


    ?>




    </body>


    </html>