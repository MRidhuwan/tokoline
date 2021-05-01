<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  {{-- menambahkan css  --}}
  @stack('prepend-style')
  {{-- Style --}}
  @include('includes.style')
  @stack('addon-style')
</head>

<body>

  <!-- Page Content -->
  {{-- pages --}}
  {{-- menaruh code yang berada di folder pages --}}
  @yield('content')

  {{-- Footer --}}
  @include('includes.footer')

  <!-- Bootstrap core JavaScript -->
  @stack('prepend-script')
  {{-- scripts --}}
  @include('includes.script')
  @stack('addon-script')
</body>

</html>