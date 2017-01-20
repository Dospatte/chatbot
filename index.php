<?php
if ($_GET['name'] == NULL):
?>

<link href="css/style.css" rel="stylesheet">

<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
    <input type="hidden" name="page" value="1">
	<input type="submit" value="Send!">
</form>

<?php
else: 
$name = $_GET['name'];
$half_name_length = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($name) - $half_name_length;
$name_end = mb_substr($name, $half_name_length, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_length);
$botname = $name_end . $name_beginning;
?>

<h2><?= $botname ?></h2>

<?php
$svar = [
  ["färg" => "gul", "namn" => "citron"],
  ["färg" => "röd", "namn" => "äppel"],
  ["färg" => "grön", "namn" => "lime"],
  ["färg" => "orange", "namn" => "apelsin"]
  ];
?>


<form>
	<label for="fraga">Fråga boten</label>
	<input type="text" name="fraga" id="fraga">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
	<input type="submit" value="Send!">
</form>


<?php
$search = $_GET['fraga'];
for ($i = 0; $i < count($svar); $i++) {
  if (in_array($search, $svar[$i])) {
    echo $svar[$i]["namn"];
  }
}
?>





<?php endif ?>

</body>
</html>