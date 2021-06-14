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

            @if($errors->any())
              @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }}</p>
              @endforeach
            @endif

            <form id="form" action="{{ route('form') }}" method="post">
              @csrf
              <div class="form-group">
                <input class="input-control" type="text" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input class="input-control" type="text" name="email" placeholder="Email">
              </div>
              @captcha
              <div class="form-group">
                <button class="btn btn-sm btn-success" type="submit">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('#form').submit()
    })
  </script>
</body>
</html>