
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
  <body class="d-flex h-100 text-center text-bg-dark ">
    

      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column backgroundcolor">
      <header class="mb-auto" style="font-family: 'Outfit', sans-serif;">
          <div>
          <img src="./src/imagem/banner.png" alt="banner" class="float-md-start mb-0"/>
          <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0" href="index.html">Home</a>
              <a class="nav-link fw-bold py-1 px-0" href="freetime.html">Free Time</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">França</a>
              <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="recados.php">Contact</a>
          </nav>
      </div>
      </header>
      
      <main class="px-3" style= " text-align: left; font-family: 'Outfit', sans-serif;">
        <section id="lista-recados">
                <div class="container">                
                <h1 style="text-align: center">Meus recados</h1>
                <p style="text-align: center"><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>
                
                <?php
                    $sql = "SELECT * FROM recados WHERE ativo like'Y' ";
                    $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-pessoal','root','');
                    $resultado = $conexao->query($sql);
                    $lista = $resultado->fetchAll();
                ?>

              <div class="card  mb-3" style="max-width: 18rem;">
                <?php foreach ($lista as $linha): ?>
                    <div class="caixa">
                      <div class="card-header text-bg-primary"><h4 style="text-align: end;
                                  text-transform: capitalize;"><?php echo $linha['nome'] ?></h4>
                      </div>
                      <div class="card-body text-dark">
                        <p class="card-text-success"><?php echo $linha['recado'] ?></p>
                      </div>			
                    </div>
                <?php endforeach ?>
                </div>
              </div>
            </section>        
      </main>

      <footer class="mt-auto text-white-50">
          <p style="text-align: left;">Dev, by  Victor H.</p>
      </footer>
      </div>
    
    
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    
  </body>
</html>
