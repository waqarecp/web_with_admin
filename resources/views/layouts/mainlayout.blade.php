<!DOCTYPE html>
<html lang="en">
 <head>
  <title>@yield('title')</title>
  @include('layouts.partials.head')
 </head>
 <body>
    @include('layouts.partials.spinner')
    @include('layouts.partials.top-bar')
    @include('layouts.partials.nav')
    @include('layouts.partials.header')
    @include('layouts.partials.search-modal')
    @yield('content')
    @yield('newsletter')
    @yield('footer')
    @include('layouts.partials.footer-scripts')
    @yield('scripts')
 </body>
</html>