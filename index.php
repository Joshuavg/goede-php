<?php

date_default_timezone_set("Europe/Amsterdam");

$minuut = date("i");
$seconde = date("s");
$uur = date("h");
					if ($uur >= 0)
{
		$tijd = "nacht";
					if ($uur >= 6)
		{
		$tijd = "morgen";
					if ($uur >= 12)
			{
		$tijd = "middag";
					if ($uur >= 18)
				{
		$tijd = "avond";
				}
			}
		}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="goedephp.css"></link>
	<title>goede-php</title>
		<meta http-equiv="refresh" content="1" >
</head>

<body class="<?php echo $tijd;?>">

		<h1>Goede<?php echo $tijd; ?></h1>
		<h2> <?php echo "$uur:$minuut:$seconde"; ?></h2>

</body>
</html>
