<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HARDWARE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/sena.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vocabulary.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="img/sena.png">
  </head>
  <body>
    <?php
    include('conexionU.php');
    session_start();
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $result=mysqli_query($varConexion, "SELECT * FROM usuario WHERE id = '".$id."'");
    if($result){
        while($row=$result->fetch_array(MYSQLI_NUM)){
          $e=array();
    ?>
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/sena.png" class="logo ms-2 my-2" alt="sena-logo"></a>
        <h1 class="textlogo d-none d-md-block">SENA DESIGN</h1>
        <div id="navbarSupportedContent">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link">
                  <?php echo $nombre." ".$apellido;?>
                </a>
              </li>
                <?php
                    }
                  }
                ?>
              <li class="nav-item">
                <a class="nav-link" href="#juegos">Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="module.php">Modules</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person"></i></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="autenticacion/cerrarsesion.php">sign off</a></li>
                  </ul>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!---hjksadkjaskj-->
<!--MODULO 1-->
    <section id="curso">
      <h2 class="linea pb-5 pt-5"><span class="text-linea">About the Course</span></h2>
      <div class="container-fluid">
        <div class="row mt-2 mb-5">
        <?php 
          $value=$_POST['hola'];
          if($value==1){
          $result=mysqli_query($varConexion,"SELECT*FROM glosario_palabras where id>=1 and id<=8 ");
          if($result){
            while($row=$result->fetch_assoc()){
              $E=array();    
        ?>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3" id="hola">
          <div class="card1">
              <div class="card_landing" style="--i:url(data:image/jpeg;base64,<?php echo base64_encode($row["imagen"])?>)">
                  <h6><?php echo $row["palabra"]?></h6>
              </div>
              <div class="card_info">
                  <div class="head">
                      <p class="title"><?php echo $row["palabra"]?></p>
                      <div class="description">
                          <p><?php echo $row["pronunciación"]?></p>
                      </div>
                  </div>
                  <div class="content">
                      <p class="title"><?php echo $row["descripcion"]?></p>
                  </div>
                      <audio controls class="mt-3" style="max-width: 90%;">
                          <source src="data:audio/mp3;base64,<?php echo base64_encode($row["audio"])?>" type="audio/mp3">
                          Your browser does not support the <code>audio</code> element.
                      </audio>
              </div>
          </div>
        </div>
        <?php 
              }
          }
        ?>
      </div>
    </div>
  </section>

<!--Juegos-->

  <section id="juegos">
    <h2 class="linea pb-5 pt-5"><span class="text-linea">Games module 1</span></h2>
      <div class="container">
        <div class="card text-center d-flex align-items-center">
          <img src="img/module1.jpg" class="card-img img-fluid" style="width: 100%; filter: brightness(50%);"alt="...">
          <div class="card-img-overlay">
            <div class="d-flex flex-column justify-content-center align-items-center h-10" id="hola2">
              <p class="card-text1">Here goes content of the game.</p>
              <a href="module.php #games_module_1" id="btn" class="btn btn-outline mt-3">Go Games Module 1</a>
            </div>
          </div>
        </div>
      </div>
  </section>

<!--MODULO 2-->

  <?php 
    }else if($value==2){
      $result=mysqli_query($varConexion,"SELECT*FROM glosario_palabras where id>=9 and id<=16");
      if($result){
        while($row=$result->fetch_assoc()){                  
  ?>
    <div class="col-lg-6 col-md-12 col-sm-12 mb-3" id="hola">
      <div class="card1">
          <div class="card_landing" style="--i:url(data:image/jpeg;base64,<?php echo base64_encode($row["imagen"])?>)">
              <h6><?php echo $row["palabra"]?></h6>
          </div>
          <div class="card_info">
              <div class="head">
                  <p class="title"><?php echo $row["palabra"]?></p>
                  <div class="description">
                      <p><p><?php echo $row["pronunciación"]?></p></p>
                  </div>
              </div>
              <div class="content">
                  <p class="title"><?php echo $row["descripcion"]?></p>
              </div>
              <audio controls class="mt-3" style="max-width: 90%;">
                <source src="data:audio/mp3;base64,<?php echo base64_encode($row["audio"])?>" type="audio/mp3">
                Your browser does not support the <code>audio</code> element.
              </audio>
          </div>
      </div>
    </div>
    <?php 
        }
      }
    ?>
    </div>
  </div>
</section>
        
<!--Juegos-->
        
  <section id="juegos">
    <h2 class="linea pb-5 pt-5"><span class="text-linea">Games module 2</span></h2>
      <div class="container">
        <div class="card text-center d-flex align-items-center">
          <img src="img/module2.jpg" class="card-img img-fluid" style="width: 100%; filter: brightness(50%);"alt="...">
          <div class="card-img-overlay">
              <div class="d-flex flex-column justify-content-center align-items-center h-10" id="hola2">
                <p class="card-text1">Here goes content of the game.</p>
                <a href="module.php games_module_2" id="btn" class="btn btn-outline mt-3">Go Games Module 2</a>
              </div>
          </div>
        </div>
      </div>
  </section>

<!--MODULO 3-->
  <?php
    }else if($value==3){
      $result=mysqli_query($varConexion,"SELECT*FROM glosario_palabras where id>=17 and id<=24 ");
      if($result){
        while($row=$result->fetch_assoc()){
          $E=array();
  ?>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3" id="hola">
            <div class="card1">
                <div class="card_landing" style="--i:url(data:image/jpeg;base64,<?php echo base64_encode($row["imagen"])?>)">
                    <h6><?php echo $row["palabra"]?></h6>
                </div>
                <div class="card_info">
                    <div class="head">
                        <p class="title"><?php echo $row["palabra"]?></p>
                        <div class="description">
                            <p><p><?php echo $row["pronunciación"]?></p></p>
                        </div>
                    </div>
                    <div class="content">
                        <p class="title"><?php echo $row["descripcion"]?></p>
                    </div>
                      <audio controls class="mt-3" style="max-width: 90%;">
                        <source src="data:audio/mp3;base64,<?php echo base64_encode($row["audio"])?>" type="audio/mp3">
                        Your browser does not support the <code>audio</code> element.
                      </audio>
                </div>
            </div>
        </div>
  <?php 
        }
    }
      
  ?>
      </div>
    </div>
  </section>
      
      <!--Juegos-->
      
  <section id="juegos">
    <h2 class="linea pb-5 pt-5"><span class="text-linea">Games module 3</span></h2>
    <div class="container">
      <div class="card text-center d-flex align-items-center">
        <img src="img/module3.jpg" class="card-img img-fluid" style="width: 100%; filter: brightness(50%);" alt="...">
        <div class="card-img-overlay">
          <div class="d-flex flex-column justify-content-center align-items-center h-10" id="hola2">
            <p class="card-text1">Here goes content of the game.</p>
            <a href="module.php #games_module_3" id="btn" class="btn btn-outline mt-3">Go Games Module 3</a>
          </div>
        </div>
      </div>
    </div>
  </section>

 
<!--MODULO 4-->
      <?php
          }else if($value==4){
            $result=mysqli_query($varConexion,"SELECT*FROM glosario_palabras where id>=25 and id<=32 ");
        if($result){
          while($row=$result->fetch_assoc()){
            $E=array();
            
      ?>
      <div class="col-lg-6 col-md-12 col-sm-12 mb-3" id="hola">
      <div class="card1">
          <div class="card_landing" style="--i:url(data:image/jpeg;base64,<?php echo base64_encode($row["imagen"])?>)">
              <h6><?php echo $row["palabra"]?></h6>
          </div>
          <div class="card_info">
              <div class="head">
                  <p class="title"><?php echo $row["palabra"]?></p>
                  <div class="description">
                      <p><p><?php echo $row["pronunciación"]?></p></p>
                  </div>
              </div>
              <div class="content">
                  <p class="title"><?php echo $row["descripcion"]?></p>
              </div>
                  <audio controls class="mt-3" style="max-width: 90%;">
                      <source src="data:audio/mp3;base64,<?php echo base64_encode($row["audio"])?>" type="audio/mp3">
                      Your browser does not support the <code>audio</code> element.
                  </audio>
          </div>
      </div>
    </div>
          <?php 
            }
          }
          ?>
        </div>
      </div>
    </section>
    
    <!--Juegos-->
    
    <section id="juegos">
      <h2 class="linea pb-5 pt-5"><span class="text-linea">Games module 4</span></h2>
      <div class="container">
        <div class="card text-center d-flex align-items-center">
          <img src="img/module4.jpg" class="card-img img-fluid" style="width: 100%; filter: brightness(50%);" alt="...">
          <div class="card-img-overlay">
            <div class="d-flex flex-column justify-content-center align-items-center h-10" id="hola2">
              <p class="card-text1">Here goes content of the game.</p>
              <a href="module.php #games_module_4" id="btn" class="btn btn-outline mt-3">Go Games Module 4</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
        }
    ?>
<footer class="mt-5">
    <div class="container">
      <div class="footerinfo row">
        <div class="col col-lg-4 col-md-6 col-sm-6">
        <div class="footer-links">
          <h4>ABOUT US</h4>
          <ul>
            <li><a class="link" href="#">Services</a></li>
            <li><a class="link" href="#">Privacy Policy</a></li>
          </ul>
        </div>
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-6">
          <div class="footer-links">
            <h4>SUPPORT</h4>
            <ul>
              <li><a class="link" href="#">Account</a></li>
              <li><a class="link" href="#">Help</a></li>
            </ul>
            </div>
          </div>
        <div class="col col-lg-4 col-md-12 col-sm-12">
        <div class="footer-links">
          <h4>SOCIAL MEDIA</h4>
          <div class="footer-social">
            <a class="ayuda" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            </a>
            <a class="ayuda" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a>
            <a class="ayuda" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-youtube" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg>
            </a>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  </footer>
  <p class="textito"> @2023 | Senadesign.com</p>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
        