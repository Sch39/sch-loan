<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>@hasSection('title')
    @yield('title') @else {{ config('variables.title') }}
    @endif</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- styles --}}
  @include('sections/styles')
  {{-- script --}}
  @include('sections/scriptsAbove')
</head>

<body>
  @yield('content')
  @include('sections/scriptsBelow')
</body>

</html>