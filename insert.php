<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST["submit"]))
{
	
$userid=$_POST["userid"];
$name=$_POST["name"];
$bname=$_POST["bname"];
$doi=$_POST["doi"];





$sql = "INSERT INTO  borrowers(userid,name,bname,doi)
VALUES ('$userid','$name','$bname','$doi')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script type="text/javascript">
alert("inserted successfully");
window.location="afterlogin.php"
</script>
<?php
}

?>


<html>
<body>
<div id="background">
<form method ="post">
<div>
<table width="200" height = "200" border ="0" align ="center">

UserId : <input type="text" name="userid"  required />
<br>
<br>
Name : <input type="text" name="name"  required />
<br>
<br>
Book Name: <input type="text" name="bname"  required />
<br>
<br>

Date Of Issue:<input type="text"  name="doi" required>
<br><br>

 <input type="submit" name="submit"  value="submit">
</div>
</table>
</form>
</div>

</body>
</html>