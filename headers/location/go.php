<?
$url = strip_tags($_GET["url"]);
if ($url) {
	header("Location: $url");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Куда отправимся?</title>
	<meta charset="utf-8" />
</head>

<body>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	 Куда отправимся?
	<select name="url" size="1">
		<option value="http://www.google.com">Google</option>
        <option value="http://www.bigmir.net/">Bigmir)net</option>
        <option value="http://www.bing.com">Bing</option>
	</select>
	<input type="submit" value="GO!">
</form>

</body>
</html>
