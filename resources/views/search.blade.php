<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-4 col-lg-4">
        <div class="card mt-4">
          <div class="card-body">

            @foreach ($users as $user)
              <p>{{ $user->name }}</p>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>