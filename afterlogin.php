
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "library");     
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Details</title>
</head>
<body bgcolor="lightyellow">
<form action="" method="post">
<table padding="10px" width="724" border="0">
  <tr>
    <th width="74" height="57" scope="col"><div align="left">userid</div></th>
    <th width="74" height="57" scope="col"><div align="left">name</div></th>
    <th width="160" scope="col"><div align="left">book name</div></th>
    <th width="135" scope="col"><div align="left">date of issue</div></th>
    <th width="72" scope="col"><div align="left"></div></th>
    <th width="70" scope="col"><div align="left"></div></th>
	<button type="button" onclick="window.location.href='insert.php'">insert</button>
  </tr>
  <?php
 
  $res=mysqli_query($con,"select * from borrowers");//select all details of one person from table reg
  if(mysqli_num_rows($res)>0)//if id of the person is >0(id starts from 0) then select all attributes of that id
  {
	  while($row=mysqli_fetch_array($res))
	  {
		  
  ?>
  <tr>
    <td height="49"><?php echo $row['userid']; ?>&nbsp;</td>
	<td><?php echo $row['name']; ?>&nbsp;</td>
    <td><?php echo $row['bname']; ?>&nbsp;</td>
    <td><?php  echo $row['doi']; ?>&nbsp;</td>
        
    <td><a href="update1.php?id=<?php echo $row['id'];?>">update</a>&nbsp;</td>
    <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a>&nbsp;</td> 
  </tr>
  <?php
	  }
  }
  ?>
</table>
</form>
</body>
</html>
