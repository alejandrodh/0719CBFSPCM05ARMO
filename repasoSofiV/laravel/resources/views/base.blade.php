<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Home | Mi sitio web')</title>
  </head>
  <body>
    <h1>Página principal</h1>
    <nav>
      <ul>
        <li>Home</li>
        <li>Productos</li>
        <li>Contacto</li>
      </ul>
    </nav>
    @yield('content')

  </body>
</html>
