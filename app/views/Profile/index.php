<html>
<head>
	<title>Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>Profile</h1>
<p>
	<table>
	<?php
	foreach ($data as $item) {
		echo "<tr>
		<td type=name>$item->first_name</td> 
        <td type=name>$item->middle_name</td>
        <td type=name>$item->last_name</td>
		<td type=action>
		<a href='/Profile/edit/$item->profile_id'>Edit Profile</a>
		</td>
		</tr>";
	}
?>
</table>
</p>
<a href='/Comment/index' style="padding-right: 10px;">Add Comment</a>

<a href='/Publication/index' style="padding-right: 10px;">Add Publication</a>
<a href='/Main/index'>Back to Main page</a>

</body>
</html>