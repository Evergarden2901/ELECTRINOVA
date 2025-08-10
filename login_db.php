<?php 
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * ,`id` AS `user_id` 
                      FROM `user` 
                      WHERE `username`='{$username}' 
                      AND `password`='{$password}' 
                      AND `status`='1';";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) == 1) {

                $row=$result->fetch_assoc();

                $user_group=$row['user_group'];
                $user_id=$row['user_id'];
                $user_username=$row['username'];

                if ($user_group == 'admin'){
                    
                }elseif($user_group=='user'){
                    $_SESSION['group'] = $user_group;
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['username'] = $user_username;
                    $_SESSION['success'] = "Your are now logged in";
                    header("location: index.php");
                }else{
                    array_push($errors, "Username & Password is required");
                    $_SESSION['error'] = "Username & Password is required";
                    header("location: sign-in.php");
                }




            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: sign-in.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: sign-in.php");
        }
    }

?>
