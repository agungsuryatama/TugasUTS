<html>
	<head>
	<title>WEATHER APP</title>
	<h2>Kondisi Cuaca</h2>
	</head>
	
	<body>
	
	<form class="navbar-form pull-right">
        <input class="span2" name="city" type="text" placeholder="Kota">
        <input class="span2" name="state" type="text" placeholder="Code Kota">
        <button type="submit" class="btn btn-success">Result</button>
    </form>
	</body>

<?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>
	<br></br>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
</html>