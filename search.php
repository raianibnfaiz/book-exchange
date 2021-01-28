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
<form action="search.php" method="post">
	 <label for="book_title"><b>Book Name :</b></label>
    <input type="text" placeholder="Enter Book Name " name="book_title" required>
	<div class="clearfix">
      <button type="submit" name ="search" class="signupbtn">Search</button>
    </div>
	
</form>

<?php
$conn = new mysqli("localhost", "root", "", "book_exchange");

if(isset($_POST['book_title']) ){
	$query=" select username,book_title from library where book_title like '%" . $_POST['book_title'] . "%' and username!= '" . $_SESSION['username'] . "'" ;
	//echo $query;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "<br><br>";
   //var_dump($conn);
    echo "<br>";

    echo "<p>Here is search results</p> <br><br>";

    
    $result = $conn->query($query);
   // var_dump($result);
    //echo "<br><br>";

   
if($result->num_rows > 0){
	echo"<table id=player>";
	echo"<tr>";
		 echo"<th>username</th>";
    echo"<th>book title</th>";
echo"</tr>";
while ($row=$result->fetch_assoc()) {
	# code...
	
	
	echo "<tr>";
	$link = sprintf("<a href='profile.php?username=%s'>%s</a>", $row['username'], $row['username']);
	echo " <td> " . $link . " </td> " ;
    echo " <td> " . $row['book_title'] . " </td> " ;
    			echo "</tr>";
}
}
else{
			  echo "Could not find appointments  in database!";
		  
		}

		$conn->close();
}
?>
</table>
<p>Go Back To Your <a href="home.php"><b>Home Page</b></a></p>
</body>
</html>