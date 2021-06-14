<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
  <div class="container" id="app">
    <div class="my-3 alert alert-success">This is the listening page</div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>