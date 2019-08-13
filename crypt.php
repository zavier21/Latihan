<!DOCTYPE html>
<html>
<head>
	<title>crypt</title>
</head>
<body>
	<form method="post">
		Input text  <Input type="text" name="text"> <input type="submit" name="submit">
	</form>
</body>
<?php
if (isset($_POST['submit'])) {
$text = $_POST['text'];
$crypt = crypt($text, '@..$i%$');
echo "<br>Contoh CRYPT() = ".$crypt;
$MD5 = md5($text);
echo "<br>Contoh MD5 = ".$MD5;
$hash = hash('sha256', $text);
echo "<br>Contoh Hash = ".$hash;
$sha1 = sha1($text);
echo "<br>Contoh Sha1 = ".$sha1;
$base64e = base64_encode($text);
echo "<br>Contoh base64_encode = ".$base64e;
$base64d = base64_decode($base64e);
echo "<br>Contoh base64_decode = ".$base64d;

	
}

/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
?>
</html>