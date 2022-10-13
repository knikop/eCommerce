<html>
<head>
	<title>Publication</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>Publications</h1>
<p>
	<table>
	<?php
	foreach ($data as $item) {
		echo "<tr>
		<td type=image>$item->picture</td> 
        <td type=name>$item->caption</td>
        <td type=name>$item->date_time</td>
		<td type=action>
		<a href='/Publication/edit/$item->publication_id'>Edit</a>
        <a href='/Publication/delete/$item->publication_id'>Delete</a>
		</td>
		</tr>";
	}
?>
</table>
</p>

<a href='/Publication/add'>Add Publication</a>
<a href='/Main/index'>Back to Main page</a>

</body>
</html>