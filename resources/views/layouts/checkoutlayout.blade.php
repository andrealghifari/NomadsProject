<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      @yield('title')
    </title>

    {{-- STYLING --}}
    {{-- @stack('prepend-style') --}}
    @include('includes.style')
    @stack('addons-style')
  </head>
  <body>
    {{-- NAVBAR  --}}
    @include('includes.navbar-checkout')

    {{-- HEADER  --}}
    {{-- Main Content --}}
    @yield('content')


    

   {{-- FOOTER --}}
   @include('includes.footer')
   {{-- SCRIPT --}}
   {{-- @stack('prepend-script')    --}}
   @include('includes.script')
   @stack('addons-script')
  </body>


</html>