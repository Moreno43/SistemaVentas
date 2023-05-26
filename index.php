<?php
  session_start();

  require 'conexion_bd.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM tbl WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/flower.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilox.css">
    <script src="Js/logica.js" async></script>
    <title>Game Shop | </title>
</head>
<body>
    
<header>

<?php if(!empty($user)): ?>
  <br>BIENVENIDO A LA VIDA: 
  <br><?= $user['email']; ?>
  <a href="logout.php">
  💤
  </a>
<?php else: ?>


    

    <a href="login.php">Login</a>
    <b>OR</b>
      <a href="signup.php">SignUp</a>

      <?php endif; ?>

        <div class="box">
        <h1>A R C A D E  -  R O O M</h1>
        </div>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Super Mario Bros.</span>
                <img src="img/mario.jpg" alt="" class="img-item">
                <span class="precio-item">$60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Mega Man 2</span>
                <img src="img/mega man 2.jpg" alt="" class="img-item">
                <span class="precio-item">$60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pac-Man</span>
                <img src="img/pacman.jpg" alt="" class="img-item">
                <span class="precio-item">$30</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Sonic</span>
                <img src="img/sonic.jpg" alt="" class="img-item">
                <span class="precio-item">$40</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">CTR Crash Team Racing</span>
                <img src="img/ctr.jpg" alt="" class="img-item">
                <span class="precio-item">$60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">The Last of Us</span>
                <img src="img/tlou.jpg" alt="" class="img-item">
                <span class="precio-item">$60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Outlast</span>
                <img src="img/out.jpg" alt="" class="img-item">
                <span class="precio-item">$40</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Tomb Rider</span>
                <img src="img/tr.jpg" alt="" class="img-item">
                <span class="precio-item">$30</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Grand Thef Auto V</span>
                <img src="img/gta.jpg" alt="" class="img-item">
                <span class="precio-item">$20</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section> 

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h3>Team</h3>
                <ul>
                    <li><a href="#">Juan Pablo Nieto Rico</a></li>
                    <li><a href="#">David Alexander ???? Angel</a></li>

                </ul>
            </div>

            <div class="footer-column">
                <h3>Developer</h3>
                <ul>
                    <li><a href="#">Juan Pablo Moreno Lopez</a></li>
                    <li><a href="#">Sara Yulitza Torres Diaz</a></li>

                </ul>
            </div>

            <div class="footer-column">
                <h3>About</h3>
                <ul class="social-media-icons">
                    <li><a href="https://matias.ma/nsfw/"></i>ඞ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Todos los derechos reservados &copy; 2023</p>
        </div>
    </footer>
    

</body>
</html>