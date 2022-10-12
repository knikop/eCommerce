<html>
<head>
	<title>Edit Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

<h1>New Profile Information</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<label>First Name:<input type="text" name="first_name" /></label>
    <label>Middle Name:<input type="text" name="middle_name" /></label>
    <label>Last Name:<input type="text" name="last_name" /></label>
	<label>Profile picture:<input type="file" name="profile_pic" id="profile_pic" /></label><img id='profile_pic_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" /><br>
	<input type="submit" name="action" value="Save changes" />
</form>

<script>
profile_pic.onchange = evt => {
  const [file] = profile_pic.files
  if (file) {
    profile_pic_preview.src = URL.createObjectURL(file)
  }
}

file = "<?= $data['profile']->profile_pic ?>";
if (file != "") {
	document.getElementById("profile_pic_preview").src = "/images/" + file;
}


</script>



</body>
</html>