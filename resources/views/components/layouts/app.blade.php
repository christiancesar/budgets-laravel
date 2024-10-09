<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Budgets App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="container">
    <nav>
      <h1>Budgets App <i class="ph ph-currency-circle-dollar"></i> </h1>
    </nav>
    <div class="content">
      {{ $slot }}
    </div>
    <footer>
      <hr />
      © 2024 Christian Cesar
    </footer>
    @livewireScripts
  </body>
</html>
