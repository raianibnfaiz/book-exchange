<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>window.location.assign('index.php')</script>";
} else {
    ?>
<html>
    <head>
        <meta charset='utf=8'>
        <title>Home Page</title>
        <style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
    text-align: center;
  background-color: black;
  color: grey;
  padding: 15px;
  text-decoration-color: white;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 12px;
  margin-bottom: 9px;
  background-color: grey;
 text-decoration-color: white;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: grey;
}


.footer {
  background-color: black;
  color: grey;
  padding: 15px;
  text-decoration-color: white;
  text-align: center;
  font-size: 12px;
 
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
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
.nav{
    background-color: black;
    text-align:center;
}
.nav li{
    font-size:20px;
    display:inline-block;
    padding:20px;
    margin: 10px;
    color: grey;
}
.nav li:hover{
    background-color:#f1f1f1;

}
.nav li a{
    color: grey;

}

.center{
    position: absolute;
    top: 30%;
  width: 90%;
  word-spacing: 5px;
  text-align: center;
  font-size: 70px;
  font-style: bold;
  font-style: italic;
  color: #f1f1f1;
  padding: 10px;
  letter-spacing: 5px;
  text-shadow: 1px 1px grey;
  text-indent: 10px;
}
.quote{
    position: absolute;
    top: 50%;
  width: 90%;
  word-spacing: 5px;
 
  font-size: 30px;
color: white;
letter-spacing: 3px;
text-indent: 5px;
}
img { 
  width: 100%;
  height: auto; 
}
div {
  padding: 8px;
}
h1 {
  text-align: center;
text-indent: 70px;
  word-spacing: 10px;
  letter-spacing: 3px;
  color: white;
}
p{
    width: 70%
    top:40%;
    text-indent: 60px;
    letter-spacing: 3px;
    color: grey;
}
.footer {
  
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
.logoutbtn {
    letter-spacing: 1px;
  float:center;
  width: 10%;
  top:10%;
  color: black;
  background-color: grey;
  
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 100px) {
   .logoutbtn {
     width: 10%;
  }
</style>
    </head>
    <body>
           <ul class="nav">
        <br>
         <h1>Online Book Swap
     For University Students</h1>
          
     <br><br><br><br>
      <li><a href= <?php echo"myprofile.php?username=" . $_SESSION['username'] . "><b>My Profile</b>"
      ?></a></li>
      <li> <a href="search.php"><b>Go To Search for book</b></a></li>
      <li><a href="library.php"><b>Add book to your profile</b></a></li>
      <li><a href="notification.php"><b> Notification</b></a></li>
    <div class="quote"><h1>Welcome  <?php echo  $_SESSION['username']?> </h1> </div><br><br>
    <div class="clearfix">
<input type='button' value="Log out" onclick="window.location.assign('logout.php');" class="logoutbtn">
</div>
<img src="unnamed.jpg" alt="picture" width="1000" height="300">

<ul class="nav">  
    <div class="footer">
  <p>All right reserved @raian</p>
</div>
    </body>
</html>
    <?php
    
}
?>

