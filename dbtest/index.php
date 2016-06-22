<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


</head>
<body>
	<a href="#" onclick="return getOutput();"> test </a>
	<div id="output">waiting for action</div>

	<button onclick="return getip();">click</button>

	<script>
		// handles the click event, sends the query
		function getOutput() {
			$.ajax({
				url:'myAjax.php',
				complete: function (response) {
					$('#output').html(response.responseText);
				},
				error: function () {
					$('#output').html('Bummer: there was an error!');
				}
			});
			return false;
		}

	</script>

	<script type="application/javascript">
	function getip(json){
		alert("getip");
	  alert(json.ip); // alerts the ip address
	}
	</script>

	<script type="application/javascript" src="http://jsonip.appspot.com/?callback=getip"> </script>

</body>
</html>