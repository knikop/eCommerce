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
    <label>Picture:<input type="file" name="pic" id="pic" /></label><img id='pic_preview' src='/images/blank.jpg' style="max-width:20px;max-height:20px" /><br>
	<input type="submit" name="action" value="Add new publication" />
    <label>Date Time:<input type="date" name="date_time" /></label><br>
</form>

<script>
	pic.onchange = evt => {
  const [file] = pic.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>

</body>
</html>