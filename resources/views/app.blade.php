<!DOCTYPE html lang="PT-br">
<html>
  <head>

  
    <meta charset="utf-8" />
      <!--favicon -->
      <link rel="shortcut icon" href="{{ asset('icon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
     <!--mdi iconss -->
     <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
     <!-- material icons-->
     <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" />
     <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" 
        href="https://storage.googleapis.com/non-spec-apps/mio-icons/latest/outline.css">

    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
