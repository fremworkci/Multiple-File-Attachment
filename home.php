<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Multi Upload File CI </title>
</head>
<body>
	<?= form_open_multipart('User/prosesUpload'); ?>
	<p>File Gambar</p>
	<input type="text" name="name"><br>
	<input type="file" name="adhar[]" multiple><br><br>
	<button>Upload Gambar</button>
	<?= form_close(); ?>
	
</body>
</html>