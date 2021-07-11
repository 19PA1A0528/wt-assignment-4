<?php
 include ('connection.php');
//if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["msg"])){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       $name=$_POST["name"];
       $password=$_POST["password"];
       $email=$_POST["email"];
       $phone=$_POST["phone"];
       $qry1="INSERT INTO wt(`name`, `password`, `email`, `phone`) VALUES ('$name','$password','$email','$phone')";
       $res1=mysqli_query($conn,$qry1);
    }
    else{
       
        echo "";
    }
    mysqli_close($conn);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
     <form id="one" method="POST" action="">
     <label><b>Contact form</b></label><br><br>
     username:<input type="text"  id="userid" name="name" required><br><br>
     password:<input type="password" id="pass" name="password" required><br><br>
     Email id:<input type="email"  id="mailid" name="email"><br><br>
     phone no:<input type="tel" id="phone" name="phone" pattern="[0-9]{10}"  required><br><br>
     <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>