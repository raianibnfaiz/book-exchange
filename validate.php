<?php

session_start();

//if (!isset($_SESSION['uname'])) {
//    echo "<script>window.location.assign('index.php')</script>";
//} else {
//echo "<script>window.alert('i am here')</script>";
    $username = "";
    $password = "";
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    if (!empty($username) && !empty($password)) {
        
        try {
            $con = new PDO('mysql:host=localhost;dbname=book_exchange', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = "select * from users where username='$username' && password='$password'"; // Query 
            $pdostmt = $con->query($stmt);
			//$pdostmt = $con->prepare($stmt);
			$info=$pdostmt->fetchAll(PDO::FETCH_NUM);
			
			
			// Crucial Lines Most Crucial Lines
			

            if ($pdostmt->rowCount() == 1) {
                ///echo "<script>window.alert('i am here')</script>";
                $_SESSION['username'] = $username;
				 $_SESSION['id'] = $info[0];
                echo "<script>window.location.assign('home.php');</script>";
            } else {
                echo "<script>window.location.assign('index.php?status=invalid');</script>";
            }
        } catch (PDOException $ex) {
            echo "<script>window.location.assign('index.php?status=dberror');</script>";
        }
    } else {
        echo "<script>window.location.assign('index.php?status=invalid')</script>";
    }
//}
?>

