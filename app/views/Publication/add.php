<html>
<head>
	<title>Publication</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>New Publication</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<label>Caption:<input type="text" name="caption" /></label><br>	
    <label>Picture:<input type="file" name="picture" id="picture" /></label><img id='pic_preview' src='/images/blank.jpg' style="max-width:250px;max-height:250px" /><br>
	<input type="submit" name="action" value="Add new publication" />
</form>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    picture_preview.src = URL.createObjectURL(file)
  }
}
</script>

</body>
</html>