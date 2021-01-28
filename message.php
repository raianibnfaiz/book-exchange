<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>request</title>
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
	<h1>Give A Message </h1>
    <p> Write down here</p>
<form action="message.php" method="post" required > 
	 <label for="msg"></label>
    <input type="text" placeholder="Enter your message " name="msg" required>
<input type="hidden" name="receiver" value="<?php echo $_GET['receiver']?>">
<input type="hidden" name="book_title" value="<?php echo $_GET['book_title']?>">
<input type="hidden" name="reply" value="<?php echo $_GET['reply']?>">
<div class="clearfix">
      <button type="submit" name ="submit" class="signupbtn">Send</button>
    </div>
</form>
<?php
if(isset($_POST['msg'])) {
	//var_dump($_POST);
	$conn = new mysqli("localhost", "root", "", "book_exchange");
	$query = 'insert into messages (sender, receiver, book_title, msg, reply) values (?, ?, ?, ?,?)';
	$stmt = $conn->prepare($query);
	$sender=$_SESSION['username'];
	$receiver=$_POST['receiver'];
	$msg=$_POST['msg'];
	$reply=$_POST['reply'];
	$book_title=$_POST['book_title'];
	
	$stmt->bind_param("ssssi", $sender, $receiver, $book_title, $msg, $reply);
	$result = $stmt->execute();
	if ($result === TRUE) {
		echo "<br><br>";
		echo 'request sent!';
	} else {
		echo 'Failed to send request!';
	}
}
?>
<p>Back To <a href="home.php"><b> Home Page </a><b></a></p>
</body>
</html>