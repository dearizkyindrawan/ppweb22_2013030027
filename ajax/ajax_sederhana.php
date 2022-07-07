<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AJAX</title>
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>ajax</h2>
input1 :<input type="text" name="nama" id="nama">
input2 :<input type="text" name="nama2" id="nama2"><br>
output: <span id="output"></span>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	$('#nama').keyup(function(){
		get_data();
	})
	$('#nama2').keyup(function(){
	get_data();
	})
	function get_data(){
		var nama = $('#nama').val();
		var nama2 = $('#nama2').val();
		$.ajax({
			type : "POST", url : "proses.php", data : 'nama='+nama+'&nama2='+nama2,
			success : function(res){
				$('#output').html(res);
			}
		})
	}
});
</script>