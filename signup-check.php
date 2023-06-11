<?php 
session_start();
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['pass']) 
		&& isset($_POST['name']) && isset($_POST['re_pass'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

	$re_pass = validate($_POST['re_pass']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;

	// echo $user_data;




    if (empty($uname)) {
        header("Location: signup.php?error=Username is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    }  else if (empty($re_pass)) {
        header("Location: signup.php?error=Password Confirmation is required&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=name is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=Password doesn't match. Try Again&$user_data");
        exit();
    } 
    
    else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is already taken. Try Another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
           } else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

} else {
    header("Location: signup.php");

    exit();
}

?>