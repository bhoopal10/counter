<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<div class="welcome">
		<button onclick="return counters()">Hit It</button>
		<p>Count : <span id="count">{{$count}}</span></p>
	</div>
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript">
		function counters()
		{
			var url = "{{url('count')}}";
			var count = $('#count').text();
			$.ajax({
				type : 'post',
				data : {count:1},
				url : url,
				success : function(data)
				{
					var co=parseInt(count)+1;
					$('#count').text(co);
				}
			});
		}
	</script>
</body>
</html>
