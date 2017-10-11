<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
	<?php
		$num = 0;
		if(isset($_GET['num'])){
			$num = intval($_GET['num']);
		}

			$a = 1;
			$b = 1;
			$c = 2;
			$result = 0;
			echo  $a.' '.$b.' '.$c.' ';
			for ($i= 3; $i < $num; $i++) { 
				$result = $a + $b + $c;
				$a = $b;
				$b = $c;
				$c = $result;
			
				echo $result.' ';
			}
	?>
</body>
</html>