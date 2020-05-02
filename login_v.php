<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="jquery-1.11.2.min.js"></script>
<script>
  $(document).ready(function(){
   $("input").focus(function(){
    $(this).css("background-color", "yellow");
  
  });
  $("input").blur(function(){
    $(this).css("background-color","lightgreen");
  });
});
</script>


	<style type="text/css">
  .grad {
  background-image: radial-gradient(white, lightgrey, grey);
}

		 body
  {
    background-color: lightgray;
    font-family: sans-serif;
  }
    div{
      background-color: white;
      margin: 40px 400px 10px 400px;
      border:groove gray;
      border-radius: 10px;
      padding: 1em;
      text-align: center;
    }
    div#cr
    {
      background-color: white;
      margin: 8px 400px 8px 400px;
      padding:0 0.5em 0 0.5em;
      border:groove gray;
      border-radius: 10px;
      
      text-align: center;

    }
     #rv{
      background-color: black;
      color:white;
      text-align: center;
      padding: 1em;
    }
    a
    {
    	text-decoration: none;
    	color:grey;

    }
    a:hover
    {
    	background-color:black;
    	border-radius: 10px;
    	padding:0.5em;
    }
    
    input
    {
    	padding: 0.5em;
    	border-radius: 5px;
    	border-color: black;
    }
    button
    {
    	background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;
    }
     button a 
    {
      text-decoration: none
      font-family:sans-serif;
      color:white;
    }
    #Submit
    {
      background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;

    }
    </style>

 

</head>
<body >
	<div class="grad">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<h4 id="rv">Sign In to our community</h4>
		<h3>Email address</h3>
		<input type="email" name="lemail" placeholder="Enter your email address" autocomplete="on">
    <h5 style="color:red">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['lemail'];
    $vargu = explode("@",$email);
    echo "Username: ". $vargu[0]. "<br/>";
    echo "Domeni: ". $vargu[1]."<br/>"; 
  }
  ?></h5>
		<h3>Password</h3>
		<input type="password" name="lpassword" keygen="password" placeholder="Enter your password"><br/><br/>
	  <input name="add" type="submit" id="add" value="Sign In">
		<p id="fp"><a href="#">Forgot your password?</a></p>
		
	</div>
	<div id="cr" class="grad">
		<h3>New to Mag Magazine?</h3>
		<h3><a href="signup.php">Sign Up</a></h3>
  </form>  

	</div>

 <?php

require("dbconfig.php");

$conn = mysqli_connect(servername, username, password, dbname); 
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

if(isset($_POST['add'])){ 

 
  $lemail = $_POST['lemail'];
$lpassword=$_POST['lpassword'];

  
  $sql = "INSERT INTO login (lemail, lpassword)
  VALUES ('$lemail','$lpassword')";

  $retval = mysqli_query($conn, $sql );
  if(! $retval )
  {
  die('Nuk mund te shtohen te dhenat ne tabele: ' . mysqli_error($conn));
  }

  $last_id = mysqli_insert_id($conn); //ID e rekordit te fundit
  echo "Te dhenat u shtuan me sukses.\nID eshte: ". $last_id;
  mysqli_close($conn);
}

?>

</body>
</html>