<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') &mdash; {{ Voyager::setting('title') }}</title>

  <meta name="description" content="{{ Voyager::setting('description') }}">

</head>
<body>

    @yield('content')

</body>
</html>