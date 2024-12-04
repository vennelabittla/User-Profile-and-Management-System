<?php

$servername="localhost";
$username="root";
$password="";
$dbname="profile";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn) {
            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];

    $sql = "UPDATE `users` SET `name`='$name',`user_name`='$user_name',`user_email`='$user_email',`user_pass`='$user_pass'     WHERE `user_email`='$user_email'";
    $query = $conn -> query($sql);

    if($query) {
        echo "
        <script>
            alert('Updated Successfully');
            window.location.href = 'http://localhost/expense/includes/profile.php?user_email=$user_email';
        </script>
        ";
    }
    else {
        echo "User's data doesn't exist";
    }
}
else {
    echo "Not Connected";
}

?>