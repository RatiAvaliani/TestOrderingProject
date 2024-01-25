<html lang="en">
<head>
    <title>Navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Palitra</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="col-12">

        <form action="/password/reset" method="post">

            @if(!empty($errors->first()))
                <div class="row col-lg-12">
                    <div class="alert alert-danger">
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            <div class="form-group">
                <label for="email">პაროლის განახლება</label>
                <input type="email" class="form-control" name="email" value="{{ $email }}" id="email" placeholder="ელ–ფოსტა">
            </div>

            <div class="form-group">
                <label for="password_recovery">პაროლის განახლება</label>
                <input type="password" class="form-control" name="password" id="password_recovery" placeholder="ახალი პაროლი">
            </div>

            <div class="form-group">
                <label for="password_confirmation">გაიმეორეთ პაროლი განახლება</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="გაიმეორეთ პაროლი">
            </div>

            <input type="hidden" name="token" value="{{ $token }}">
            <button type="submit" class="btn btn-primary">განახლება</button>
            @csrf
        </form>
    </div>
</div>
</body>
</html>
