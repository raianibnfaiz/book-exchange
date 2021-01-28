<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
    </head>
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

 .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 8px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 100px) {
   .signupbtn {
     width: 100%;
  }
}
</style>

    <body>
	<h1 style="text-align:center;">Online Book Swap For University Students</h1>

        <form method="post" action="validate.php">
            <h1>Login For User</h1>
    <p> Please fill up usename & password</p>
    <hr>
    
    <label for="username"><b>UserName :</b></label>
    <input type="text" placeholder="Enter UserName " name="username" required>
          <br><br>
          <label for="password"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password " name="password" required>
	<br><br>
    <div class="clearfix">
      <button type="submit" name ="submit" class="signupbtn">Login</button>
    </div>
            
        </form>
		<br/>
		
		<br/>
		
		
		<p3>Go Back To <a href="page.php" ><b>Signup Page </b></a></p3>
		

        <?php
        $status = "";
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == 'invalid') {
                ?>
                <script>window.alert('invalid username or password');</script>
                <?php
            }
            else if($status=='dberror'){
                ?>
                <script>window.alert('Database Connection Error');</script>
                <?php
            }
            else if($status=='logout'){
                ?>
                <script>window.alert('Successfully logged out.');</script>
                <?php
            }
        }
        ?>

    </body>
</html>
