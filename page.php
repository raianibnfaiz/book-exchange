<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1{
  color: darkgreen;
}

/* Set a style for all buttons */
button {
  background-color: darkred;
  color: white;
  align-items: center;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 100px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="page.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Online Book Swap For University Students</h1>
    <p> Create an account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="first_name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first_name" required>
    
    <label for="last_name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="last_name" required>

    <label for="phone_number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone_number" required>

    <label for="email_address"><b>Email</b></label>
    <input type="text" placeholder="Enter Email Address" name="email_address" required>


   
   

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  <p> Already a user?<a href="index.php"><b>Log in</b></a></p>
</form>
<?php
//var_dump($_POST);
if(isset($_POST["username"])){
  $query = "insert into users values ('" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["first_name"] . "','" . $_POST["last_name"] . " ','" . $_POST["phone_number"] ." ','" . $_POST["email_address"] . "')";
  //echo $query;

  echo "<br>";
  $conn = new mysqli("localhost", "root", "", "book_exchange");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
   //var_dump($conn);
    

    echo "Registration Completed. Go To <a href=index.php><b>Login Page</b></a>";

    
    $result = $conn->query($query);
    //var_dump($result);
    //echo "<br><br>";

   
}
?>

</body>
</html>
