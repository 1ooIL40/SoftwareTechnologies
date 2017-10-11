<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        X: <input type="text" name="num1" />
		Y: <input type="text" name="num2" />
        Z: <input type="text" name="num3" />
		<input type="submit" />
    </form>
	<!--Write your PHP Script here-->
	<?php
		if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
			$num1 = intval($_GET['num1']);
			$num2 = intval($_GET['num2']);
			$num3 = intval($_GET['num3']);

			$numbers = array('num1' => $num1,'num2' => $num2, 'num3' => $num3);

			$result = "Positive";
			$counter = 0;
			foreach ($numbers as $num => $value) {
				if($value === 0){
					$counter =0;
					break;
				}else if($value < 0){
					$counter++;
				}
			}

			if($counter === 1 || $counter === 3){
				$result = "Negative";
			}
			echo $result;
		}
	?>
</body>
</html>