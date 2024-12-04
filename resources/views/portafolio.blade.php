<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles7.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="menu">
        <img class="log" src="{{voyager::image(setting('site.log'))}}">
        
      
        <label class="labe_hamburguesa" for="menu_hamburguesa">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="list_icon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </label>
        
       
        <input class="menu_hamburguesa" type="checkbox" id="menu_hamburguesa">
        
        
        <ul class="lis">
            <li><a id="pag" href="welcome">Inicio</a></li>
            <li><a id="tamaño" href="quienes">Quienes Somos</a></li>
            
           
            <li class="servicios">
                <a id="tamaño" href="servicios">Servicios</a>
                <ul class="sub_links">
                    <li><a id="tamaño" href="mantenimiento">Mantenimiento</a></li>
                    <li><a id="tamaño" href="desarrollo">Desarrollo Web</a></li>
                </ul>
            </li>
            
            <li><a id="tamaño" href="contactanos">Contacto</a></li>
        </ul>
    </div>
</header>

<h1 class="nuest">PORTAFOLIO</h1>
<div class="contenedorpa">
    <div class="portafolio">
        @foreach ($portafolios as $portafolio)
            <div>
                <h2 class="voy"  data-aos="zoom-in-right" data-aos-duration="1000">{{ $portafolio->Name }}</h2>
                <img class="card" src="{{ Voyager::image($portafolio->image) }}" data-aos="flip-left" data-aos-duration="1000">
                <p class="voy2" data-aos="zoom-in" data-aos-duration="1000">{{ $portafolio->Descripcion }} <a href="servicios">Quiero saber más</a></p>
            </div>
        @endforeach
    </div>
</div>


<footer class="foot" data-aos="fade-up" data-aos-duration="1000">
    <div class="titulo_f">
      <h2>{!!setting('site.nomtit')!!}</h2>
      <hr>
      <div class="contenido">
        <div class="subcont">
          <h3 class="titsub">servicios</h3>
          <a class="link"href="mantenimiento">Mantenimiento de Ordenadores </a>
          <a class="link"href="desarrollo">Servicios Web</a>
        </div>
        <div class="subcont2">
          <h3 class="titsub">quines somos</h3>
        <a class="link" href="#slider1"> nuestras tecnologias </a>
        <a class="link" href="quienes">mas sobre nosotros </a>
        </div>
      </div>
      <hr>
      <div class="contact">
          <h4>{!!setting('site.Nocontac')!!}</h4>
      </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
    AOS.init();
    </script>
</body>
</html>