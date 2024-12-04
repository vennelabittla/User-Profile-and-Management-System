<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="profile";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

            $user_email = $_GET['user_email'];

            if($conn)
            {
                $sql="SELECT * FROM users WHERE user_email='$user_email'";
                $query=$conn->query($sql);
                if($query->num_rows>0){
                    $row=$query->fetch_assoc();
                }
                else{
                    echo "User doesn't exist";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: rgb(190, 236, 237);
        }
        
        .container{
            margin-bottom: 10px;
            margin-left: 24vw;
            margin-right: 20vw;
            margin-top: 20vh;
            height: 60vh;
            width: 50vw;
            background-color: white; 
            border-radius: 20px;
        }
        .head{
          margin: auto;
          height: 50px;
          font-size: 38px;
          text-align: center;
          margin-top: 30px;
        }
        .tab{
          font-size: larger;
          /* display: flex; */
          justify-content: center;
          margin-right: 180px;
          margin-top: 35px;
          margin-left: 40px;
        }
        td{
          text-align: center;
          width: auto;
          margin-left: 90px;
          font-size: medium;
        }
        img{
          margin-left: 80px;
          margin-top: 40px;
          height: 90px;
          width: 90px;
        }
        .picc{
          display: flex;
          justify-content: space-between;
        }
        td{
          margin: 10px;
          padding: 20px;
        }
        h3{
          padding: 10px;
          margin-left: 30px;
          margin-top: 3px;
        }
        p{
          padding: 10px;
          margin-left: 30px;
          margin-top: 0px;
        }
        button{
            font-size: 16px;
            background-color: rgb(72, 128, 250);
            width: 5vw;
            border: none;
            border-radius: 4px;
            height: 5vh;
            margin-left: 14vw;
            margin-top: 8vh;
        }
        button:hover{
            cursor: pointer;
        }
        .abc{
          font-size: 16px;
            background-color: rgba(250, 29, 29, 0.932);
            width: 5vw;
            border: none;
            border-radius: 4px;
            height: 5vh;
            margin-left: 12vw;
            margin-right: 10vw;
            margin-top: 5vh;
        }
        
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
        <hr style="border: none;">
        <div class="head">
          My Profile
        </div>
        <div class="picc">
          <img src="pic.png" alt="">
          <div class="tab">
                <h3>
                    <?php echo $row['user_name'];?>
                </h3>
                <p>
                    <?php echo $row['user_email'];?>
                </p>
          </div>
        </div>
        <button><a href="edit_details.php?user_email=<?php echo $row['user_email'];?>">Edit</a></button>
        <button class="abc">
          <a href="login.html">Logout</a>
        </button>
    </div>
</body>
</html>
