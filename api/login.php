<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postar conteudo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<form class="container" method="POST" action="postar.php">
  <div class="mb-3 col-12">
    <label for="email" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="test@gmail.com" aria-describedby="emailHelp">
  </div>

  <div class="mb-3 col-12">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name = "senha" class="form-control" id="descricao">
  </div>

 
 
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>

</body>
</html>