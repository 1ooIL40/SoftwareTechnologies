<?php //01. Hello, PHP!?>
<?php// echo "Hello, PHP!"; ?>

<?php//02. Numbers 1 to 20 ?>
<?php /*
<ul>
	<?php for ($i = 1; $i <= 20; $i++): ?>
		<?php $color = $i % 2 == 0 ? "green" : "blue"; ?>
		<li><span style="color: <?=$color; ?>"><?=$i; ?></span></li>
	<?php endfor; ?> 

</ul>
 */?>

<?php /* 
 <form method="get">
 	Name: <input name="name"><br>
 	Age: <input name="age"><br>
 	<button type="submit">Изпрати!</button>
 </form>
<?php 
var_dump($_GET);
 ?>
 */?>

 <?php //03. Color Palette ?>
 <?php /*
<head>
<style>
	div {
  display: inline-block;
  width: 150px;
  padding: 2px;
  margin: 5px;
}
</style>
</head>
<body>
<?php 
	for ($red = 0; $red <= 255; $red += 51) { 
		for ($green = 0; $green <= 255; $green += 51) { 
			for ($blue = 0; $blue <= 255; $blue += 51) { 
				$color = "rgb($red,$green,$blue)";
			echo "<div style='background:$color'>$color</div>\n";
			}
		}
} ?>
</body>
*/?>

<?php //04. Hello, Person! ?>
<?php /*
<form >
	Name:<input type="text" name="person" value="<?=isset($_GET['person'])?>">
	<button type="subbmint" name="sub_btn">Submin!</button>
	<?php 
		if(isset($_GET['person'])){
		$person = htmlspecialchars($_GET['person']);
		echo "Hello, $person!";
	}
	 ?>
</form>
*/?>

<?php //05. Dump a HTTP GET Request ?>
<?php /* 
<form>
	<div>Name:</div>
	<input type="text" name="personName" />
	<div>Age:</div>
	<input type="number" name="age" />
	<div>Town:</div>
	<select name="townId">
		<option value="10">Sofia</option>
		<option value="20">Varna</option>
		<option value="30">Plovdiv</option>
	</select>
	<div><input type="submit"></div>
</form>
<?php var_dump($_GET);?>
*/?>

<?php //06. Sum Two Numbers ?>

<?php /*
<?php 
	if (isset($_GET['num1']) && isset($_GET['num2'])) {
		$num1 = intval($_GET['num1']);
		$num2 = intval($_GET['num2']);
		$sum = $num1 + $num2;
		echo "$num1 + $num2 = $sum";
	}
?>
<form>
	<div>First Number:</div>
	<input type="number" name="num1" />
	<div>Second Number:</div>
	<input type="number" name="num2" />
	<div><input type="submit" /></div>
</form>
*/ ?>

<?php //07. Celsius - Fahrenheit ?>
<?php /*
<form>
	Celsius: <input type="text" name="cel" />
	<input type="submit" value="Convert" />
	<?php
		if(isset($_GET['cel'])){
			$celsium = $_GET['cel'];
			$farenheit = celsiumToFarenheit($celsium);
			echo "$celsium &deg;C = $farenheit &deg;F";
		}
	?>
</form>
<form>
	Fahrenheit: <input type="text" name="fah" />
	<input type="submit" value="Convert" />
	<?php
		if(isset($_GET['fah'])){
			$farenheit = $_GET['fah'];
			$celsium = farenheitToCelsium($farenheit);
			echo "$farenheit &deg;F = $celsium &deg;C";
		}
	?>
</form>

<?php 
function celsiumToFarenheit(float $celsium): float{
	return $celsium * 1.8 + 32;
}

function farenheitToCelsium(float $farenheit): float {
	return ($farenheit - 32) / 1.8;
}
?>
*/ ?>

<?php //08. Sort Lines ?>
<?php /*
<?php 
	$sortedLines = "";
	if(isset($_GET['lines'])){
		$text = $_GET['lines'];
		$lines = explode("\n", $text);
		$lines = array_map('trim', $lines);
		sort($lines, SORT_STRING);
		$sortedLines = implode("\n", $lines);
	}
?>

<form>
	<textarea rows="10" name="lines">
	<?=$sortedLines?>	
	</textarea><br/>
	<input type="submit" name="Sort">
</form>
*/?>

<?php //09. Capital-Case Words ?>
<?php /*
<?php 
	$result = "";
	if(isset($_GET['text'])){
		$text = $_GET['text'];
		preg_match_all('/\w+/', $text, $words);
		$words = $words[0];

		$upperWords = array_filter($words, function($word){
			return strtoupper($word) == $word;
		});
		$result = implode(', ', $upperWords);
	}
?>

<form>
	<textarea rows="10" name="text">
		<?= $result ?>
	</textarea><br/>
	<input type="submit" name="Extract">
</form>
*/?>