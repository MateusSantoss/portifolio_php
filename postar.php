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
<form class="container" method="POST" action="postagem.php">
  <div class="mb-3 col-12">
    <label for="text" class="form-label">titulo</label>
    <input type="text" name="titulo" class="form-control" id="text" aria-describedby="emailHelp">
  </div>

  <div class="mb-3 col-12">
    <label for="descricao" class="form-label">descrição</label>
    <input type="text" name = "descricao" class="form-control" id="descricao">
  </div>

  <div class="mb-3 col-12">
    <label for="link_url" class="form-label">link url</label>
    <input type="url" name = "link_url" class="form-control" id="link_url">
  </div>

  <div class="mb-3 col-12">
    <label for="link_img" class="form-label">link imagem</label>
    <input type="text" name = "link_img" class="form-control" id="link_img">
  </div>
 
 
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>

</body>
</html>