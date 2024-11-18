


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quibit</title>

   <link rel="stylesheet"href="http://localhost/Assest/css/styles.css"> 
    <link rel="stylesheet" href=/Assest/css/styles.css>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
<body>
    <header class="header">
        <div class="logo">
            <img href="Main.html" src="../Img/Logo.png"  class="logo">
        </div>

        <div>
            <nav class="filtrar">
                <form class="busqueda">
                  <input class="buscar" type="buscar" placeholder="Search" aria-label="Search">
                  <button class="lupa" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></button>
                </form>
              </nav>
        </div>
          </div>
            <nav>
               <ul class="nav-links">
                      <li> <a href="Main.html" class="a">inicio</a></li>
                      <li> <a href="sing.php" class="a">Sign</a></li>
                      <li> <a href="login.html" class="a">login</a></li>
                      <li> <a href="carrito.html" class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg></a></li>
               </ul>            
            </nav>
        <a onclick="openNav()" class="menu" href="#"><button><img src="../img/menu.png" alt=""></button></a>
            <div id="mobile-menu" class="overlay">
              <a onclick="closeNav()" href="" class="close">&times;</a>
              <div class="overlay-content">
                <li> <a href="Main.html" class="a">inicio</a></li>
                <li> <a href="sing.html" class="a">Sign</a></li>
                <li> <a href="login.html" class="a">login</a></li>
                <li> <a href="carrito.html" class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg></a></li>
              </div>
         </div>

           </div>  
    </header>    

<section>
    <div class="baner">
        <p><h3>Bienvenidos</h3></p>
        <h2>Desde la tecnologia<Br>hasta la tierra</Br></h2>
        <button class="ingresar"><a href="login">Ingresa ahora</a></button>
        <img src="" alt="">
    </div>
  <hr>
        
    <main class="Productos">
      <p>Productos</p>
    </main>
    
    
    <!--tarjeta 1 bootstrap -->
    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="../img/Frutas.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Frutas</h5>
          <p class="card-text">Descubre una amplia variedad de frustas frescas y de alta calidad..</p>
          <div class="explora">
            <button type="button" class="btn btn-info">Explorar</button>
          </div>
        </div>
      </div>
      <!--tarjeta 2 bootstrap -->
      <div class="card">
        <img class="card-img-top" src="../img/Granos.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">legumbres</h5>
          <p class="card-text">Descubre una amplia variedad de legumbres frescas y de alta calidad..</p>
          <div class="explora">
            <div class="explorar">
              <button type="button" class="btn btn-info">Explorar</button>
            </div>
          </div>
        </div>
      </div>
      <!--tarjeta 3 bootstrap -->
      <div class="card">
        <img class="card-img-top" src="../img/Verdura.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">verduras</h5>
          <p class="card-text">Descubre una amplia variedad de verduras frescas y de alta calidad..</p>
          <div class="explorar">
            <button type="button" class="btn btn-info">Explorar</button>
          </div>
        </div>
      </div>
    </div>
</section>
<main>
  <!--tarjeta 4 bootstrap -->
  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src="../img/queso.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Productos lacteos</h5>
        <p class="card-text">Descubre una amplia variedad de productos lacteos y de alta calidad... </p>
        <div class="explorar">
        <button   type="button" class="btn btn-info">Explorar</button>
      </div>
      </div>
    </div>
    <!--tarjeta 5 bootstrap -->
    <div class="card">
      <img class="card-img-top" src="../img/fertilizante.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">fertilizantes y quimicos</h5>
        <p class="card-text">Descubre una amplia variedad de fertilizantes y vitaminas y de alta calidad..</p>
        <div class="explorar">
          <button type="button" class="btn btn-info">Explorar</button>
        </div>
      </div>
    </div>
    <!--tarjeta 5 bootstrap -->
    <div class="card">
      <img class="card-img-top" src="../img/flores.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">flores</h5>
        <p class="card-text">Descubre todo tipos de flores y de las mejores.</p>
        <div class="explorar">
        <button type="button" class="btn btn-info">Explorar</button>
      </div>
      </div>
    </div>
  </div>
<!--Video  -->
<hr>
</main>
<article class="rectangulo">
    <div clas="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/QuoqfP9iV38?si=OA0qQ_WR6jdXD4VC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <div class="texto">
        <p>
         <h1>Conecta tu mundo con la tierra!</h1> 
        </p>
      </div>
   </p>
  </div>
</article>
<Article>
  <hr>


</Article>
  <article>
    <div class="app-download">
      <p>Descarga la APP</p>
      <img src="../img/phones.png" alt="Imagen de teléfonos" >
      <div class="buttons">
        <button type="button" class="btn btn-primary">APP STORE</button>
        <button type="button" class="btn btn-success">Play Store</button>
      </div>
    </div>
  </article>
  



<footer class="footer">
  <div class="container">
    <p>&copy; QIUBIT 2024 Tu Empresa. Todos los derechos reservados.</p>
      <ul class="footer-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      </div>
  </footer>
<script type="text/javascript" src="http://localhost/Assest/Script/Script.js"></script>
</body>

</html>
