<html>
<head>
<script src="jquery-1.4.js"></script>
	$(document).ready(function(){
	  setInterval(function(){
		$('#divjam').load('jam.php?acak='+Math.random());
	  }, 1000;
	});

</script>
</head>
<body>
	<div id="divjam"></div>
</body>
</html>