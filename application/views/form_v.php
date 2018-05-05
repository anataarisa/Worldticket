<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="http://localhost/ci/index.php/user/add"
	method="POST">
	<table>
		<tr><td>Username </td> <td>:</td> <td><input name="username" value=""></td></tr>
		<tr><td>Pass </td> <td>:</td> <td><input name="password" type="password" value=""></td></tr>
		<tr><td>Fullname </td> <td>:</td> <td><input name="fullname" value=""></td></tr>
		<tr><td>level </td> <td>:</td>
		<td><select name="level">
		<option value="admin">Admin</option>
		<option value="user">User</option>
		</select>
		<input name="tombol" type="submit" value="simpan">
	</table>


</body>
</html>