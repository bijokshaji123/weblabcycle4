
<html>
<head>
<title> student details</title>
</head>
<body>

<h2>Student Details</h2>
 <form method="post" action=" ">
 <label for="name">Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <input type="text" name="name" required>
<br>
<label for="email">Email ID:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="email" name="email" required>
<br>

<label for="address">Address:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<textarea name="address" rows="4" required></textarea>
<br>

<label for="gender">Gender:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="gender" required>
 <option value="male">Male</option>
 <option value="female">Female</option>
 <option value="others">Others</option>
</select><br>

<label for="dob">Date of Birth:</label>
<input type="date" name="dob" required><br>

<input type="submit" value="Submit">
</form>

<?php
	   if($_POST){
		$name=$_REQUEST["name"];
		echo "Name= $name"."<br>";
		$email=$_REQUEST["email"];
		echo "Email ID= $email"."<br>";
		$address=$_REQUEST["address"];
		echo "Address= $address"."<br>";
		$gender=$_REQUEST["gender"];
		echo "Gender= $gender"."<br>";
		$dob=$_REQUEST["dob"];
		echo "Date of Birth=$dob"."<br>";
		}
	?>
</body>
</html>

