<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>user profile</title>
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
#player {
  letter-spacing: 3px;
  border-collapse: collapse;
  width: 95%;
  color: white;
}

#player td, #player th {
  border: 1px solid grey;
  padding: 8px;
}

#player th {
  padding-top: 8px;
  padding-bottom: 8px;
  width: 20%;
  text-align: left;
  background-color: black;
  color: white;
}
#player tr:hover {background-color: skyblue;}
#player tr {
	color: black;
}
</style>
</head>
<body>

<?php
$username= $_GET['username'];
echo "<b>My profile</b>";
$conn = new mysqli("localhost", "root", "", "book_exchange");
if($conn->connect_error) {
	die("Connection Failed");
}

$query=" select book_title from library where username= '" . $username . "'" ;
$result= $conn->query($query);
if($result->num_rows>0){
	echo "<br> <br>";
	echo "<table id=player>";
	echo "<tr> <th> book_title </th> </tr>";
	while($row=$result->fetch_assoc()){
		$link=sprintf("<a href = 'request.php?owner=%s&book_title=%s'>%s</a>  ",$username,$row['book_title'],$row['book_title']);
		echo "<tr> <td>" . $row['book_title'] . "</td> </tr>";
	}
	echo " </table>";



} else {
	echo "No record found";
}
?>
<p>Go Back To <a href="home.php"><b>Home Page</b></a></p>
</body>
</html>