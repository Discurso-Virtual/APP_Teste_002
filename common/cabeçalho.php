<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/teste/node_modules/bootstrap-icons/icons/">
    <link rel="stylesheet" href="http://localhost/teste/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/teste/css/skins/default.css">
    <title>Teste</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light ">
      <div>
        <img class="logo" src="http://localhost/teste/img/logoDvti.png" alt="">
      </div>
      <div class="container">
        <a class="navbar-brand" href="http://localhost/teste/home.php">
          
          <span class="navbar-toggler-icon"></span>
          
        </a>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/teste/home.php">Home</a>
            </li>
          </ul>
        </div>
        <?php if(isset($_SESSION['userID'])){ ?>
        <svg class="bi bi-person userIcon" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 16s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002zM5.022 15h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C13.516 12.68 12.289 12 10 12c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002zM10 9a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
        </svg>
        
        <span class="nomeUser"><?php echo $_SESSION['username']; ?></span>
        <a class="logOut" href="http://localhost/teste/logout.php">
        <svg class="powerLog bi bi-power" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.578 6.437a5 5 0 104.922.044l.5-.865a6 6 0 11-5.908-.053l.486.874z" clip-rule="evenodd"></path>
          <path fill-rule="evenodd" d="M9.5 10V3h1v7h-1z" clip-rule="evenodd"></path>
        </svg>
        </a>

          
        <?php
        }
        ?>
        
      </div>
      </nav>
      <?php
      //NAVBAR
      if(isset($_SESSION['userID'])){ ?>
      <div class="container-fluid">
        <div class="row sideBarBackGround">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Tabelas <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="showCliente.php">
                    <span data-feather="file"></span>
                    Clientes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="showFornecedor.php">
                    <span data-feather="shopping-cart"></span>
                    Fornecedores
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="showProduto.php">
                    <span data-feather="users"></span>
                    Produtos
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      <?php } ?>
    
