<html>
<head></head>
<body>
<?php

$fname=$_REQUEST["fn"];
$lname=$_REQUEST["ln"];
$uname=$_REQUEST["un"];
$ps=$_REQUEST["pswd"];
$sex=$_REQUEST["gen"];
$ayear=$_REQUEST["year"];
$email=$_REQUEST["em"];
$pn=$_REQUEST["numb"];

?>
<table border="1">
<tr>
<td>First Name</td>
<td><?php echo "$fname"; ?></td>
</tr>

<tr>
<td>Last Name</td>
<td><?php echo "$lname"; ?></td>
</tr>

<tr>
<td>Username</td>
<td><?php echo "$uname"; ?></td>
</tr>

<tr>
<td>Password</td>
<td><?php echo "$ps"; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo "$sex"; ?></td>
</tr>

<tr>
<td>Academic year</td>
<td><?php echo "$ayear"; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo "$email"; ?></td>
</tr>

<tr>
<td>Phone No.</td>
<td><?php echo "$pn"; ?></td>
</tr>




</table>
</body>
</html>



