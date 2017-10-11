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

		$result = 1;
		while ($num > 1) {
			$result	*= $num;
			$num--;
		}
		echo $result;
	?>
</body>
</html>