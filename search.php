<?php
include "secretinfo.php";
try{
    $dsn = "mysql:host=courses;dbname=z1838241";
    $pdo = new PDO($dsn, $username, $password);
}
catch(PDOexception $e){
     echo "failed to connect to the database: " . $e->getmessage();
}
?>

<html>
<style>

body {
   background-image: linear-gradient(to bottom, white, black);
   color: black;
}
input[type=search].searchbox {
	border-style:solid;
        border: 1px;
        border-color: black;
	border-radius: 2px;
	box-shadow: none;
	font-size: 1.1rem;
	background-color: white;
	background-position: 8px 8px;
	background-repeat: no-repeat;
	padding: 10px 10px 10px 38px;
	width: 100%;
	transition: box-shadow 0.2s, background-color 0.2s, background-image 0.2s;
	transition-timing-function: ease-in;
}
h1.main-title{
   font-size: 120px;
   margin: 200px 0 64px;
   color: black;
}
</style>

    <head>
    <title>Karaoke Search</title>
    </head>
    <body>
       <h1 class="main-title">Search For a Karaoke Song</h1>
       <form method="post" action="Print.php">
          <input type="search" name="searchbox" class="searchbox" placeholder="Search">
       </form>
    </body>
</html>
