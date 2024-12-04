<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="profile";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];

            if($conn)
            {
                $sql="SELECT * FROM `users` WHERE `user_email`='$user_email'";
                $query=$conn->query($sql);
                if($query->num_rows>0){
                    $row=$query->fetch_assoc();
                    if($user_email===$row['user_email'] && $user_pass===$row['user_pass']){
                    echo"
                     <script>
                         window.location.href = 'profile.php?user_email=$row[user_email]';
                     </script>
                     ";
                    }
                }
                else{
                    echo "Incorrect Email or Password";
                }

            }
            else{
                echo "Please Signup to continue";
            }
        


 ?>



