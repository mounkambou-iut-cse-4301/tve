<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @include('layouts/partials/_allcss')
</head>
<body>
@include('layouts/partials/_headermenu')



@yield('content')



@include('layouts/partials/_footer')

@include('layouts/partials/_allscript')
</body>
</html>