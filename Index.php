
<html>
	<head>
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 30px;
            padding-bottom: 20px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<title>WEATHER APP</title>
	<h2 align=center>Perkiraan Cuaca</h2><br>
			
	</head>
	<body>
       <?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>
	</body>

<?php
date_default_timezone_set("Asia/Jakarta");

?>
<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <h3>WAKTU SAAT INI :
    <h2 id="clock">
</div>
</html>