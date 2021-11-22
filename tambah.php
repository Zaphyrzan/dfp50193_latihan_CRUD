<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah</title>
	<script type="text/javascript">
		function validateForm() {
			var a = document.forms["Form"]["name"].value;
			var b = document.forms["Form"]["ic"].value;
			if (!a || !b) {
				alert("Please Fill All Required Fields");
				return false;
			}
		}
	</script>
</head>

<body>
	<form method="post" action="simpan.php" name="Form" onsubmit="return validateForm()">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>IC</label>
			<input type="text" name="ic" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save">Simpan</button>
		</div>
	</form>
</body>

</html>