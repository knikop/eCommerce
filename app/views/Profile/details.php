<html>
<head>
	<title>Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>Profile Details</h1>
<dl>
	<dt>
		First Name:
	</dt>
	<dd>
		<?= $data['profile']->first_name ?>
	</dd>
    <dt>
		Middle Name:
	</dt>
	<dd>
		<?= $data['profile']->middle_name ?>
	</dd>
    <dt>
		Last Name:
	</dt>
	<dd>
		<?= $data['profile']->last_name ?>
	</dd>
	
</dl>


<a href='/Profile/index/<?= $data['user']->user_id ?>'>Back to index</a>

</body>
</html>