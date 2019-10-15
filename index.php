<!DOCTYPE html>
<html>
<head>
	<title>Typed</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/typed.js"></script>
	<script>
		$(function(){
			var typed = $(".typed");

			typed.typed({
			    strings: [
			    "Texto 1", 
			    "Texto 2", 
			    "Texto 3",
			    "Texto 4"
			    ],
			    typeSpeed: 100,
			    loop: true,
			});
		});
	</script>
</head>
<body>

	<h1 class="typed"></h1>

</body>
</html>