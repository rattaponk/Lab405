<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pure PHP Demo</title>
</head>

<body>
<!-- call "saveForm.php" when submit -->
<!-- <form method="post" name="myForm"  action="saveForm.php" 
		onSubmit="return checkForm(this)" enctype="multipart/form-data" > -->

<!-- call saveFile.php when submit -->
<form method="post" name="myForm"  action="saveFile.php" 
		onSubmit="return checkForm(this)" enctype="multipart/form-data" >

	productName 1 : <input type="text" name="product1" id="product1" ><br>
	productName 2 : <input type="text" name="product2" id="product2" ><br>
	productName 3 : <input type="text" name="product3" id="product3"><br>
	productName 4 : <input type="text" name="product4" id="product4"><br>
	productName 5 : <input type="text" name="product5" id="product5"><br>
	productName 6 : <input type="text" name="product6" id="product6"><br>
	productName 7 : <input type="text" name="product7" id="product7"><br>
	<input type="file" name="myFile" id="myFile"><br>
	<!--<input type="button"   onClick="saveForm()" ><br>-->
	<input type="submit"   >

</form>

<script>

	function checkForm()
	{
		if(document.getElementById("product1").value==""){
				alert("Please fill data");
				document.getElementById("product1").focus();
				return false;
		}else if(document.getElementById("product2").value==""){
				alert("Please fill data");
				document.getElementById("product2").focus();
				return false;
		}else
			return true;
	}

	function saveForm()
	{
		myForm.submit();
	}

</script>

</body>
</html>
