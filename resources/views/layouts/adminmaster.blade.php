<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ $title }}</title>
		@include('layouts/partials/_allscrip_css_admin')
	</head>
	<body>
		<div class="wrapper">
			@include('layouts/partials/_adminsidebar')
			<div id="content">
				@include('layouts/partials/_adminnavbar')
				@yield('content')
			</div>
		</div>
		@include('layouts/partials/_scriptadminsidebar')
		
	</body>
</html>