<?php
    $servername="localhost";
        $username="root";
        $password="";
        $dbname="profile";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];

            if($conn)
            {

                $sql = "INSERT INTO users (name, user_name, user_email, user_pass) VALUES ('$name', '$user_name', '$user_email', '$user_pass')";

                $query=$conn->query($sql);

                if($query)
                    {
                        echo "Inserted successfully";
                        echo"
                        <script>
                            alert('Logged in Successfully');
                            window.location.href = 'http://localhost/expense/includes/login.html';
                        </script>
                        ";
                    }
                    
                else
                {
                    echo "Not inserted";
                }
            }
            else{
                echo "Not connected";
            }
        


 ?>



