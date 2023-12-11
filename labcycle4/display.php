<?php include("connect.php");
if($_POST){
$book_no=$_POST['book_no'];
$title=$_POST['title'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$query1="INSERT INTO BOOK DETAILS VALUE('$book_no','$title','$edition','$publisher')";
$sql=mysqli_query($conn,$query1);

$query2=mysqli_query($conn,"select* from book_details");
}?>

<html>
<head>
<title>Displayed Book Details</title>
</head>
<body>
<table border="1px solid black">

<tr>
<th>Book Number</th>
<th>Title</th>
<th>edition</th>
<th>Publisher</th>
</tr>

<tr>
<?php
while($row=mysqli_fetch_assoc($query)){
echo"<tr>";
echo"<td>".$row['book_no']."</td>";
echo"<td>".$row['title']."</td>";
echo"<td>".$row['edition']."</td>";
echo"<td>".$row['publisher']."</td>";
echo"</tr>";
}?>
</tr>
</table>
</body>
</html>