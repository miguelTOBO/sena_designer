<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODULES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="module.css">
    <link rel="icon" href="img/sena.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="fuction2.js"></script>
  </head>
  <body>
  <?php 
    include('conexionU.php');

    session_start();
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];

    if(($id == null || $id == '')){
      echo "No tiene autorización";
      die();
    }

    $result=mysqli_query($varConexion, "SELECT * FROM usuario WHERE id = '".$id."'");
    if($result){
        while($row=$result->fetch_array(MYSQLI_NUM)){
          $e=array();
  ?>
  <!--navbar-->
  <nav class="navbar navbar-expand-sm">
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
  

      <br>
      <div class="container">
        <div class="tab_box">
          <button class="tab_btn active">Module 1</button>
          <button class="tab_btn">Module 2</button>
          <button class="tab_btn">Module 3</button>
          <button class="tab_btn">Module 4</button>
          <div class="line"></div>
        </div>
        <div class="content_box">
          <div class="content active">
            <img class="img" src="img/module1.1.jpg" alt="">
            <div class="text">
              <h1 style="font-weight: bold;"><span font-weight="bolder">HARDWARE</span></h1>
              <p><h3 style="font-weight: bold;"><span font-weight="bolder">In this module you will see and learn the key parts of the hardware, having a knowledge of the word, how it is pronounced, a brief description of this word and an image, as well as 2 interactive games.</span></h3></p>
              <br>
              <form action="vocabulary.php" method="post">
                <button name="hola" VALUE="1" id="btn">Vocabulary</button>
              </form>
              <!--GAMES-->
            </div>
          </div>

          <div class="content">
            <img src="img/module2.2.jpg" alt="">
            <div class="text">
              <h1 style="font-weight: bold;"><span font-weight="bolder">COLOR DEPTH</span></h1>
              <p><h3 style="font-weight: bold;"><span font-weight="bolder">In this module you will see and learn the key parts of the color depth, having a knowledge of the word, how it is pronounced, a brief description of this word and an image, as well as 2 interactive games.</span></h3></p>
              <br>
              <form action="vocabulary.php" method="post">
                <button name="hola" VALUE="2" id="btn">Vocabulary</button>
              </form>
            </div>
          </div>

          <div class="content">
            <img src="img/module3.3.jpg" alt="">
            <div class="text">
              <h1 style="font-weight: bold;"><span font-weight="bolder">COLOR MODELS</span></h1>
              <p><h3 style="font-weight: bold;"><span font-weight="bolder">In this module you will see and learn the key parts of the color models, having a knowledge of the word, how it is pronounced, a brief description of this word and an image, as well as 2 interactive games.</span></h3></p>
              <br>
              <form action="vocabulary.php" method="post">
                <button name="hola" VALUE="3" id="btn">Vocabulary</button>
              </form>
            </div>
          </div>

          <div class="content">
            <img src="img/module4.4.jpg" alt="">
            <div class="text">
              <h1 style="font-weight: bold;"><span font-weight="bolder">SIZES AND SHAPES</span></h1>
              <p><h3 style="font-weight: bold;"><span font-weight="bolder">In this module you will see and learn the key parts of the sizes and shapes, having a knowledge of the word, how it is pronounced, a brief description of this word and an image, as well as 2 interactive games.</span></h3></p>
              <br>
              <form action="vocabulary.php" method="post">
                <button name="hola" VALUE="4" id="btn">Vocabulary</button>
              </form>
            </div>
          </div>
        </div>
      </div> 


      <div class="container">
            <section id="games_module_1">
              <div class="games">
                <div class="games" id="module">
                  <h2 class="linea pb-5 pt-5"><span class="text-linea">Games Module 1</span></h2>
                  <div class="row justify-content-center"> 
                    <div class="col col-lg-5 col-sm-6 mb-3 mb-sm-0">
                      <div class="card" style="width: 20rem;">
                        <div class="card-body">
                          <h5 class="card-title text-center">True or False</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                        <!--image that redirects to modal-->
                        <a href="" data-bs-toggle="modal" data-bs-target="#1">
                          <img src="img/hardware1.png" class="card-img-top" alt="...">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">True or False</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body mx-auto">
                                <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379969-hawref.html"></iframe>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-4 col-sm-6 mb-3 mb-sm-0">
                      <div class="card" style="width: 20rem;">

                        <!--image that redirects to modal-->
                        <a href="" data-bs-toggle="modal" data-bs-target="#1.1">
                          <img src="img/hardware2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                          <h5 class="card-title text-center">Alphabet Soup</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                              
                        <!-- Modal -->
                        <div class="modal fade" id="1.1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Alphabet Soup</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body mx-auto">
                                <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/14134415-hardware_and_software.html"></iframe>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          
  <section id="games_module_2">
    <div class="games">
      <div class="games" id="module2">
        <h2 class="linea pb-5 pt-5"><span class="text-linea">Games Module 2</span></h2>
        <div class="row justify-content-center"> 
          <div class="col col-lg-5 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-title text-center">Froggy Jumps</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
                            
              <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#2">
                <img src="img/pc1.png" class="card-img-top" alt="...">
              </a>

              <!-- Modal -->
              <div class="modal fade" id="2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Froggy Jumps</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379869-profundidad_del_color.html"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">
                        
              <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#2.1">
                <img src="img/pc2.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title text-center">Letters Sort</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="2.1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Letters Sort</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379927-profundidad_del_color.html"></iframe>     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
          
  <section id="games_module_3">
    <div class="games">
      <div class="games" id="module3">
        <h2 class="linea pb-5 pt-5"><span class="text-linea">Games Module 3</span></h2>
        <div class="row justify-content-center"> 
          <div class="col col-lg-5 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-title text-center">Alphabet Soup</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>

              <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#3">
                <img src="img/mc1.png" class="card-img-top" alt="...">
              </a>
                            
              <!-- Modal -->
              <div class="modal fade" id="3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Alphabet Soup</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379779-modelos_de_color.html"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">
                          
            <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#3.1">
                <img src="img/mc2.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title text-center">Relate Columns</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
                            
              <!-- Modal -->
              <div class="modal fade" id="3.1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Relate Columns</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379823-modelos_de_color.html"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <section id="games_module_4">
    <div class="games">
      <div class="games" id="module4">
        <h2 class="linea pb-5 pt-5"><span class="text-linea">Games Module 4</span></h2>
        <div class="row justify-content-center"> 
          <div class="col col-lg-5 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-title text-center">Letters Sort</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
                            
              <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#4">
                <img src="img/tf1.jpeg" class="card-img-top" alt="...">
              </a>

              <!-- Modal -->
              <div class="modal fade" id="4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">Letters Sort</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379716-tamanos_y_formas.html"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 20rem;">

               <!--image that redirects to modal-->
              <a href="" data-bs-toggle="modal" data-bs-target="#4.1">
                <img src="img/tf2.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title text-center">True or False</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="4.1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 w-100 text-center" id="exampleModalLabel">True or False</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                      <iframe allow="fullscreen; autoplay;" allowfullscreen width="880" height="380" frameborder="0" src="https://www.educaplay.com/game/16379744-tamanos_y_formas.html"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!--FOOTER-->
<footer class="mt-5">
    <div class="container">
      <div class="footerinfo row">
        <div class="col col-lg-4 col-md-6 col-sm-6">
        <div class="footer-links">
          <h4>ABOUT US</h4>
          <ul>
            <li><a class="link" href="#">Services</a></li>
            <li><a class="link" href="#">Our Politic</a></li>
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