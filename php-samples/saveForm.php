<?php
// get values individually
echo $_POST['product1']; echo '<br>';
echo $_POST['product2']; echo '<br>';
echo $_POST['product3']; echo '<br>';
echo $_POST['product4']; echo '<br>';
echo '------------------------------<br>';

// get values using array
echo $productCount= count($_POST);
echo '<pre>';
var_dump($_POST);
echo '</pre><br>';
for($i=1;$i<$productCount;$i++)
{
	echo $_POST['product'.$i]; echo '<br>';
}

// access non-existing value
if(isset($_POST['product100']))
	echo '<br>get ', $_POST['product100'];
else
	echo 'Not Found';
	
echo '<br><br><br>';

// get uploaded file property
echo $_FILES['myFile']['name'];
echo '<pre>';
var_dump($_FILES);
echo '</pre><br>';


?>