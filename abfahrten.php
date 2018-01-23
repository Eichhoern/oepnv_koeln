<html>
	<head>
		<title>Abfahrten</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta http-equiv="refresh" content="30">
		<style>
			iframe {
				margin-left: 1%;
				margin-bottom: 1%;
				width: 99%;
				height: 15em;
			}
		</style>
	</head>
	<body>
		<?php
			$list = explode(' ',$_GET['q']);
			foreach($list as $item){
				echo '<iframe src="https://www.kvb.koeln/generated/?aktion=show&code=' . $item . '&title=text" frameborder="0"></iframe>';
				echo '<hr>';
				}
		?>
	</body>
</html>
