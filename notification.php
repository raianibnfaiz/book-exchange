<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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

$conn = new mysqli("localhost", "root", "", "book_exchange");

		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		echo "<br><br>";
		//var_dump($conn);
		echo "<br>";

		//echo "Connected successfully <br><br>";

        function showTable($reply) {
          global $conn;
		  $sql = sprintf("select * from messages where receiver='%s' and reply = %d" , $_SESSION['username'], $reply);
         // $sql = "select * from messages where receiver='" . $_SESSION['username'] . "' and reply = '" . $reply ."'" ;
		  //echo "query: " . $sql . "<br><br>";
		  $result = $conn->query($sql);
		  //var_dump($result);
		  echo "<br><br>";

		  if($result->num_rows>0){
           
            echo "<table id=player>";
            echo "<tr> <th> sender </th> <th> book_title</th> <th>msg</th> </tr>";
            while($row=$result->fetch_assoc()){
       
                echo " <tr> ";
                $link = sprintf("<a href='profile.php?username=%s'>%s</a>", $row['sender'], $row['sender']);
                echo " <td> " . $link . " </td> " ;
                //echo " <td> " . $row['sender'] . " </td > ";
                echo " <td> " . $row['book_title'] . " </td> " ;
                $link2=sprintf("<a href = 'message.php?receiver=%s&book_title=%s&reply=1'>%s</a>  ",$row['sender'],$row['book_title'],$row['msg']);
                
                echo " <td> " . $link2 . " </td> ";
                
                echo " </tr> ";

            }
            echo " </table>";
          
            } else {
              echo "You have no book request !";        
            }
        }

        echo "<h2>Book Requests</h2><br>";
        showTable(0);
        echo"<br><br><br>";

        echo "<h2>Replies</h2><br>";
        showTable(1);

        $conn->close();

?>
<p>Back To <a href="home.php"><b> Home Page </a><b></a></p>
</body>
</html>