<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		insertfun();
	}
	function insertfun(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$passwordnew = $_POST['pass'];
		$number = $_POST['phonenum'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mynewdb";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		$sql = "INSERT INTO MyGuests1 (name, email, password,phonenumber)
			VALUES ('$name', '$email', '$passwordnew', '$number')";
		if (mysqli_query($conn, $sql)) {
  			echo "<div>
        <h1>Successfully registered</h1>
        <h3>Name of the user  : $name</h3>
        <h3>password of the user  : $passwordnew</h3>
        <h3>email of the user  : $email</h3>
        <h3>phone number of the user  : $number</h3>
      </div>";
		}
	}

?>
<!DOCTYPE html>
<head>
</head>
<style>
body{
  background-color:black;    
}
div{
  height: 300px;
  width: 400px;
  border: 1px solid white;
  background-color: white;
  margin:auto;
  margin-top:130px;
  border-radius:10px;
  text-align:center;
}
</style>
<body>
<br>

</body>
</html>