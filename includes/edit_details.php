<?php

$servername="localhost";
$username="root";
$password="";
$dbname="profile";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn) {

    $user_email = $_GET['user_email'];

    $sql = "SELECT * FROM `users` WHERE `user_email`='$user_email'";
    $query = $conn -> query($sql);

    if($query->num_rows>0) {
        $row=$query->fetch_assoc();
        //  echo"
        //     <script>
        //      window.location.href = 'http://localhost/expense/includes/update.php';
        //     </script>
        //  ";
    }
    else {
        echo "User's data doesn't exist";
    }
}
else {
    echo "Not Connected";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style2.css">

</head>
<body>
    <div class="container">
    <div class="card my-card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="update.php" method="POST">
                        <div class="intro">
                            <h2>Edit the Profile</h2>
                        </div>
                        <div class="mb-3 mt-1">
                            <label for="" class="form-label" ></label>
                            <input type="text" class="from-control" name="name" placeholder="Name" value="<?php echo $row['name'];?>">
                        </div>
                        <div class="mb-3 mt-1">
                            <label for="" class="form-label" ></label>
                            <input type="text" class="from-control" name="user_name" placeholder="User Name" value="<?php echo $row['user_name'];?>">
                        </div>
                        <div class="mb-3 mt-1">
                            <label for="" class="form-label" ></label>
                            <input type="text" class="from-control" name="user_email" placeholder="E-mail" value="<?php echo $row['user_email'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" ></label>
                            <input type="password" id="pas" class="from-control" name="user_pass" placeholder="Password" value="<?php echo $row['user_pass'];?>">
                        </div>
                        <input type="number" hidden name="id" value="<?php echo $row['id'];?>">
                        <div class="mb-3">
                            <button type="submit" name="register" id="sub" class="btn btn-dark">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- edit page -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>