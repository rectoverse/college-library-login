<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "library");

if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
$name=$_POST['name'];
$bname=$_POST['bname'];
$doi=$_POST['doi'];
$sid=$_GET['id'];
mysqli_query($con,"update borrowers set  userid='$userid',name='$name',bname='$bname',doi='$doi' where id='$sid'");
?>
<script type="text/javascript">
alert("update successfully");
window.location="afterlogin.php"
</script>
<?php
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>staff updation</title>
</head>
<body bgcolor="lightgray">

<form action="" method="post">
<?php 

$sid=$_GET['id'];
$res=mysqli_query($con,"select * from borrowers where id='$sid'");
if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_array($res);
	
?>

<table width="315" border="0" align="center">
  <tr>
    <th width="106" height="45" scope="row">userid</th>
    <td width="193"><input name="userid" type="text" value="<?php echo $row['userid'];?>" required/>&nbsp;</td>
  </tr>
    <tr>
    <th height="52" scope="row">name</th>
    <td><label for="name"></label>
       <input type="text" name="name"  value="<?php echo $row['name'];?>" required/></td>
  </tr>
  <tr>
    <th height="44" scope="row">book name</th>
    <td><label for="bname"></label>
      <input type="text" name="bname" value="<?php echo $row['bname'];?>" required/></td>
	<tr>
  </tr>
  <th height="44" scope="row">date of issue</th>
    <td><label for="doi"></label>
      <input type="text" name="doi"  value="<?php echo $row['doi'];?>" required/></td>
	<tr>
  </tr>
 <tr>
    <th height="50" colspan="2" scope="row"><input name="submit" value="update" onClick="return check();" type="submit"  />&nbsp;</th>
    
  </tr>
</table>
<?php
}
?>
</form>

</body>
</html>
 