<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>library</title>
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
  .signupbtn {
  float: left;
  width: 50%;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
p{
  
  letter-spacing: 1px;
  color: black;
}
</style>
</head>
<body>
<form action="library.php" method="post">
  <label for="book_title"><b>Book Name :</b></label>
    <input type="text" placeholder="Enter Book Name " name="book_title" required>
	<div class="clearfix">
      <button type="submit" name ="submit" class="signupbtn">Submit</button>
    </div>
	
</form>
<?php
if(isset($_POST['book_title'])){
	$query=" insert into library (username, book_title) values ('" . $_SESSION['username'] . "','" . $_POST['book_title'] . "')";
  $conn = new mysqli("localhost", "root", "", "book_exchange");
  //echo "$query";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "<br><br>";
   //var_dump($conn);
   //var_dump($query);
    echo "<br>";

    echo "<b> Your book is added succesfully </b> <br><br>";

    
    $result = $conn->query($query);
    //var_dump($result);
    //echo "<br><br>";

   
}


?>
<p>Go Back To Your <a href="home.php"><b>Home Page</b></a></p>
</body>
</html>