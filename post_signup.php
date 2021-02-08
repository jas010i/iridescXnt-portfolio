<!DOCTYPE html>
<html lang="en">
<head>

    


    <?php



    $mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "client-form");
    
    if ($mysqli === false){
      die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    

    $sql = "INSERT INTO client (firstName, lastName, email, webDomain, webLevel) 
              VALUES 
              ('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[domain]', '$_POST[level]')";
        if($mysqli->query($sql) === true){
          echo "Thank you for your submission.";
        } else{
          echo "ERROR: Could not submit form data. " . $mysqli->error;
        }

        $mysqli->close();


    ?>


    </head>


    </html>