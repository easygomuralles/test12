<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles8.css">
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

<div class="im">
    <img class="imv"src="{{voyager::image(setting('site.por1'))}}">
    <img class="imv1"src="{{voyager::image(setting('site.icon'))}}">
    <h1 class="tit1">MANTENIMIENTO</h1>
     <p class="principal">el funcionamiento de tu ordenador es lo esencial en tu dia dia , pues no esperes a que se dañemejor traelo a reparate y nosotros te ayudaremos aque siga funcionando como la primera ves , puedes tener la seguridad que dejas tu ordenador en las mejores manos</p>
     <p class="principal" >les ofrecemos servicio de mantenimineto .</p>
     <p class="principal" >♦ Ordenadores de escritorio</p>
     <p class="principal" >♦ Laptos</p>
</div>

 <div class="otras">
    <h1 class="tit2">conoce algunas de nuestras otras soluciones </h1>
    <div class="soluciones">
        <div class="desarrollo_web">
             <img class="col"src="{{voyager::image(setting('site.icon2'))}}">
             <h1>Desarrollo Web</h1>
             <p>Conoce mas sobre el servicio que ofrecemos orientado a el desarrollo y diseño de paginas web tanto como la realizasion y la sostenibilidad de esta </p>
             <a class="linkd" href="servicios_web">Mas informacion</a>
        </div>
        <div class="recomposicion">
        <img class="col1"src="{{voyager::image(setting('site.icon1'))}}">
             <h1>Recomposicion</h1>
             <p>Si se arruino tu computador puedes optar por llevarlo con nosotros, te ofresemos un servicio de recuperasion de tu computador componiendolo por ti </p>
             <a class="linkd" href="reconposicion">Mas informacion</a>
        </div>
    </div>
 </div>



<footer class="foot" data-aos="fade-up" data-aos-duration="1000">
    <div class="titulo_f">
      <h2>reparatec</h2>
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
          <h4>puedes contactarnos al numero (+502 0000-0000)</h4>                                                                                                                                                                                       
      </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
    AOS.init();
    </script>
</body>

</html>