<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset( 'favicon.ico' ) }}" />

    <title>{{ isset( $title ) ? $title : 'OITC3 Demo' }}</title>

    <!-- Style Sheets  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm fixed-top m-0 p-0 zindex-fixed">
  <div class="container-fluid m-0 p-0">
    <a class="navbar-brand bg-secondary bg-opacity-50 text-white m-0 p-0" href="#">
      <img src="{{ asset( 'storage/oregontech-oit-text-white-snipped.png' ) }}"
           class="w-75 m-0 p-0"
           alt="Oregon Tech Text.">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <li>
          <img src="{{ asset( 'storage/RightSideNavBar.png' ) }}"
               class="w-75 m-0 p-0 float-end"
               alt="Oregon Tech Text.">
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="pb-1">
    {{ $slot }}
</main>

<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div class="container-fluid">
        <hr />
        <div class="row">
            <div class="col-md">
                <p>Copyright &copy; <span id="current_year"></span> Ryan Reynolds (not the actor)</p>
            </div>
            <div class="col-md footer_contact">
                <p class="mb-0 text-end">Would you like to know more?</p>
                <a class="pagination justify-content-end" href="mailto:ryan.reynolds5@msubillings.edu">Ryan.Reynolds2@oit.edu</a>
                <a class="pagination justify-content-end mb-3" href="mailto:josh.fischer@oit.edu">Josh.Fischer@oit.edu</a>

            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
