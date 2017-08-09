<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Router Project by FiiFii</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<style lang="scss">
			body {
				font-family: 'Raleway', sans-serif;
				text-align: center;
			}
			.title {
				font-size: 48px;
			}
			.content {
				font-size: 30px;
			}
			.link {
				margin-right: 10px;
			}
			a:hover {
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="title">
			<p>Router Project by FiiFii</p>
		</div>
		<div class="content">
			<div id="app">
				<router-link to="/hello" class="link">Hello</router-link>
				<router-link to="/number" class="link">Number</router-link>
				<router-link to="/profile" class="link">Profile</router-link>
				<router-view></router-view>
			</div>
		</div>
		<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
	</body>
</html>
