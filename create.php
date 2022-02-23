<?php

include 'db.php';
if(isset($_POST['submit'])){
    try {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $sql = "INSERT INTO info (name, phone, email, gender, dob, country)
        VALUES ('$name', '$phone',' $email',' $gender',' $dob', '$country')";
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }

        }

  
  $conn = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="view.php">
        <button type="submit">View contacts</button>
    </form>
</body>
</html>