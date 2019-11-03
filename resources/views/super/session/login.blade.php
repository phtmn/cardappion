<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" href="Favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <title>Cardappion - Super</title>
</head>

<body>

  <main class="login-form p-md-5">
    <div class="cotainer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Cardappion - Super</div>
            <div class="card-body">
              <form action="{{ route('super.session.authenticate') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                  <div class="col-md-6">
                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                  </div>
                </div>

                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Entrar
                  </button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>

  </main>

</body>

</html>