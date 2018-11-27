
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "library");
$sid=$_GET['id'];
mysqli_query($con,"delete from borrowers where id='$sid'");
?>
<script>
alert("data deleted successfully");
window.location="afterlogin.php";
</script>