<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Libreria GoogleFonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <title>NuevoSabor</title>
</head>
<body>
  @if(auth()->user() != null && auth()->user()->hasRole('admin'))
    @include('admin/fragments/navbar')

    @yield('admin-section')
  @else
    @include('fragments/navbar')

    @yield('main-section')

    @include('fragments/footer')
  @endif
</body>
</html>
