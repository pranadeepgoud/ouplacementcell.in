<?php
require('connection.php');
if(isset($_POST['registerr'])) 
{
    $user_exist_query = "SELECT * FROM `registered_students` WHERE `phonenumber`=`$_POST[phonenumber]` OR `email`=`$_POST[email]` ";
    $result = mysqli_query($con,$user_exist_query);
    if($result) 
    {
        if (mysqli_num_rows($result) > 0) 
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['email'] == $_POST['email']) 
            {
                echo"
                    <script>
                        alert('Email already registered');
                        window.location.href='../index.php';
                    </script>
                ";
            }
            else
            {
                echo"
                    <script>
                        alert('Phone number already registered');
                        window.location.href='../index.php';
                    </script>
                ";
            }

        } 
        else 
        {
            $query="INSERT INTO `registered_students`(`first_name`, `last_name`, `email`, `password`, `phonenumber`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[password]',
            '$_POST[phonenumber]')";
            if(mysqli_query($con,$query))
            {
                echo"
                    <script>
                        alert('Registration Successful');
                        window.location.href='studentlogin.php';
                    </script>
                ";

            }
            else
            {
                echo"
                    <script>
                        alert('Cannot run query');
                        window.location.href='../index.php';
                    </script>
                ";
            }
        }
    } 
    else
     {
        echo "
            <script>
                alert('cannot run query');
                window.location.href='../index.php';
            </script>
        ";
    }
}
?>