
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Victor Hugo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./src/css/recados.css" rel="stylesheet">
    <link rel="shortcut icon" href="./src/imagem/favicon.ico" type="image/x-icon">



  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    

      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column backgroundcolor ">
      <header class="mb-auto" style="font-family: 'Outfit', sans-serif;">
      </header>
      
      <main class="px-3" style= " text-align: left; font-family: 'Outfit', sans-serif;">
      <?php
        $nome = $_POST['txtnome'];
        $turma = $_POST['optturma'];
        $recado = $_POST['txtrecado'];

        $sql = "INSERT INTO recados (nome, turma, recado, ativo) 
        VALUES ('$nome', '$turma', '$recado', 'N')";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-pessoal', 'root', '');
        $conexao->exec($sql);
        ?>
        <div class="row" style="justify-content: center">
           <div class="col-sm-6">
            <div class="card text-dark">
             <div class="card-body">
                <h5 class="card-title"><?php echo "<h3>Recado enviado com sucesso!</h3>"?></h5>
                <p class="card-text">Espere o ADM aprovar seu comentário, para visualiza-lo</p>
                <a href="recados.php" class="btn btn-primary">Voltar</a>
             </div>
            </div>
           </div>
        </div>
     
      </main>

      <footer class="mt-auto text-white-50">
          <p style="text-align: left;"></p>
      </footer>
      </div>
    
    
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    
  </body>
</html>
