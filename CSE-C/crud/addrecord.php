<?php
include('config.php');
?>

<?php 
if (isset($_POST['submit'])){
 $username = $_POST['username'];
 $age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `users` (name, age, contact, email) 
    VALUES ('$username', '$age', '$contact', '$email')";
    if (mysqli_query($conn, $sql)){
        echo 'data inserted';
    }
    else{
        echo 'data not inserted';
    }
}
else{
    echo "Welcome Guest";
}
?>