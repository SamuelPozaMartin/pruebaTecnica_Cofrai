<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrek
wKmP1" crossorigin="anonymous">
</head>

<body>
    <main class="container align-center p-5">
       <form method="POST" action="{{route('validar-registro')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="from-label">Email</label>
                <input type="email" class="form-control" id="emailInput" 
                name="email" required autocomplete="disable">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="from-label">Password</label>
                <input type="password" class="form-control" id="passwordInput" 
                name="password" required>
            </div>
            <div class="mb-3">
                <label for="userInput" class="from-label">Nombre</label>
                <input type="text" class="form-control" id="userInput" 
                name="name" required autocomplete="disable">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
       </form>
    </main>
</body>
</html>