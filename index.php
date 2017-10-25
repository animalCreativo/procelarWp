<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107004784-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107004784-1');
    </script>
 -->    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory')?>/icons/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory')?>/icons/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Procelar</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/icons/foundation-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body>
  
  <div data-sticky-container class="headermenu show-for-small-only">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" >
        <div class="row" style="padding: 0px;" id="rowMobile">
          <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" style="background:transparent;">
            <div class="columns small-8 large-3 ">
                <ul class="menu">
                   <img src="<?php bloginfo('stylesheet_directory')?>/assets/procelarLogo.svg">
                </ul>
            </div>
            <div>
                <button class="menu-icon" type="button" data-toggle="example-menu"></button>
            </div>
          </div>

          <div class="top-bar show-for-small-only" id="example-menu" style="height: 100vh;  z-index: 1; /* Sit on top */">
            <div class="top-bar-left" style="height: 100%;">
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#first" >¿Qué es Procelar?</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#second">Beneficios</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#fourth" >Modo de uso</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#third" >Dónde encontrarnos</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">           
                  <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>


     <div data-sticky-container class="show-for-medium" style="min-height:  120px;">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" id="example-menu">
        <div class="row">
          <div class="columns small-5  large-3 show-for-medium" style="width: 250px;">
            <ul class="menu">
               <img src="<?php bloginfo('stylesheet_directory')?>/assets/procelarLogo.svg" style="max-width: 200px">
            </ul>
          </div>
          <div class="columns small-12 medium-9 show-for-medium" >
            <ul class="menu" data-magellan id="menuListHeader">
                <li><a href="#first" >¿Qué es Procelar?</a></li>
                <li><a href="#second">Beneficios</a></li>
                <li><a href="#fourth">Modo de uso</a></li>
                <li><a href="#third" >Dónde encontrarnos</a></li>
                <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    
    <div>
       <img class="imgOrbit" style="width: 100%; height:auto;" data-interchange="[<?php bloginfo('stylesheet_directory')?>/assets/Mobile@2x.png, small], [<?php bloginfo('stylesheet_directory')?>/assets/Tablet.png, medium], [<?php bloginfo('stylesheet_directory')?>/assets/Desktop.png, large]]">  
    </div> 

    <div class="sections">
      <section id="first" data-magellan-target="first">
         <article id="article1" >
            <div class="row container" style="min-height: 636px; padding-top: 0px;padding-bottom: 0px;">       
                <div class="small-12 medium-4 columns  card2-section align-self-top profix" >
                  <h5 id="tituloCard2" >PESTAÑAS MÁS LARGAS Y BONITAS</h5>
                  <p id="textoCard2"> es un tratamiento que fortalece tus cejas y pestañas, estimula su crecimiento natural y disminuye su caída.</p>
                </div>
                 <div class="small-12 medium-6 columns card2 align-self-bottom" style="padding-bottom: 40px;">

                        <img  height="681px" width="681px" src="<?php bloginfo('stylesheet_directory')?>/assets/producto.png"  alt=""  />    
                 
                </div>
          </div>
        </article> 

      </section>
      <section id="second" data-magellan-target="second">
        <div class="row medium-up-3 "  style="padding-top: 20px; min-height: 420px;">
          <div class="small-12 medium-4 columns  align-self-top niko"=>
            <div class="card columns">
              <article>  
                <picture>
                  <img src="<?php bloginfo('stylesheet_directory')?>/assets/btnOk.svg" id="imageCard"/>  
                </picture>
                  
                <div class="card-section">
                    <h5>Fácil de usar</h5>
                    <p>Aplica todos los días, mañana y noche.
                    </p>
                </div>
              </article>  
            </div>
          </div>

          <div class="small-12 medium-4 columns  align-self-top niko">
            <div class="card columns">
              <article>  
                <picture>
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/btnTime.svg"  id="imageCard"/>  
                 </picture>
                  
                <div class="card-section">
                    <h5>Rápida absorción</h5>
                    <p>Gracias a su rápida absorción, puedes aplicar tu maquillaje habitual un par de minutos después de aplicar Procelar®.</p>
                </div>
              </article>  
            </div>
          </div>

          <div class="small-12 medium-4 columns  align-self-top niko" >
            <div class="card columns">
              <article>  
                <picture>
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/btnTime2.svg"  id="imageCard"/>  
                </picture>
                  
                <div class="card-section">
                    <h5>Uso diario</h5>
                    <p>Aplícalo regularmente. Usa Procelar 2 veces al día, en la mañana y en la noche. Verás resultados desde la cuarta semana.</p>
                </div>
              </article>  
            </div>
          </div>
        </div>
      </section>
      
      <section">
        <div>
          <img class="imgOrbit" style="width: 100%; height:auto;" data-interchange="[<?php bloginfo('stylesheet_directory')?>/assets/puntosVentasMobile@2x.jpg, small], [<?php bloginfo('stylesheet_directory')?>/assets/puntosVentasTablet.jpg, medium], [<?php bloginfo('stylesheet_directory')?>/assets/puntosVentas.jpg, large]], [<?php bloginfo('stylesheet_directory')?>/assets/puntosVentasHD.jpg, retina]]">  
       </div> 
        
      </section>


      <section id="fourth" data-magellan-target="fourth">
          <div class="row text-center" >
            <div class="columns small-12" >
              <h5 class="textSpecial" style="padding-top: 100px; padding-bottom: 10px;">¿Cómo funciona Procelar?</h5>
            </div>  

            <div class="columns small-12">
              <div class="responsive-embed">
                   <div class="columns small-12 text-center" >
                      <iframe id ="videoFrame" width="960" height="540" src="<?php bloginfo('stylesheet_directory')?>/assets/video.mp4" frameborder="0" allowfullscreen></iframe>
                  </div> 
              </div> 
            </div>

          </div>
      </section>

      <section id="third" data-magellan-target="third">
        <div class="row text-center" style="min-height: 420px; padding-bottom: 20px;"> 
          <div class="columns small-12 align-self-middle " >
          <br>
          <h5 class="textSpecial" style=" line-height: 1.2; ">Encuéntranos <br> en las principales farmacias del país</h5>
            <div class="row medium-up-3 " >
              <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand" style="padding-bottom: 20px;">
                 <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/cruzVerde.jpg"  />  
              </div>
              <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand" style="padding-bottom: 20px;" >
                 <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/ahumada.jpg"  />  
              </div>
              <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand" style="padding-bottom: 20px;">
                 <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/salco.png"  />  
              </div>
            </div> 
          </div>   
        </div>
      </section>
    </div>


    <div class="footer-container show-for-medium">
        <footer class="footer row align-justify">
            <div class="small-3 column hide-for-small-only">
                <div class="row">
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/procelarLogo.svg" class="attachment-full size-full wp-post-image" alt="">          
                </div>
               <div class="row footerSocial">
                    <div class="small-12 medium-4 columns align-self-middle"">
                        <a href="https://www.facebook.com/ProcelarCL/"> 
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com" style="padding-bottom: 20px; height: 60px; width: 60px;"></a>
                    </div>
                    <div class="small-12 medium-8 columns align-self-middle text-align-center">
                         <a href="https://www.instagram.com/procelarcl"> 
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/instagramLogo.svg" class="attachment-full size-full wp-post-image" alt="www.instagram.com" style="padding-bottom: 20px; height: 60px; width: 60px;"></a>
                    </div>
                </div>
            </div>
            <div class="small-9 column show-for-medium">
                <div class="row">
                    <nav class="menu-footer-container">
                        <ul id="menu-footer" class="menu footermenu">
                            <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                                <a href="#first">¿Qué es Procelar?</a>
                            </li>
                             <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                                <a href="#second">Beneficios</a>
                            </li>
                            <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                                <a href="#fourth">Modo de uso</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="#third">Dónde encontrarnos</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                    <hr size="8px" color="white">
                </div>  
                <div class="row">
                    <div class="columns small-9 footermenu">
                        <p> Derechos reservados Pharma Investi Chile S.A. </p>
                        <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
                        <p> Teléfono:(2) 2340 5800 </p>
                    </div>
                    <div class="columns small-3">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt="">
                      </div>
                  </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="footer-container show-for-small-only">
        <footer class="footer row align-justify">
            <div class="columns small-12 show-for-small-only">
                <img src="<?php bloginfo('stylesheet_directory')?>/assets/procelarLogo.svg" class="attachment-full size-full wp-post-image" alt="">
            </div>
            <div class="columns small-12 show-for-small-only" id="menuFooterMobile">
                <ul id="menu-footer-1" class="menu footermenu vertical menu">
                   <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                      <a href="#first">¿Qué es Procelar?</a>
                  </li>
                   <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                      <a href="#second">Beneficios</a>
                  </li>
                  <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                      <a href="#fourth">Modo de uso</a>
                  </li>
                  <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                      <a href="#third">Dónde encontrarnos</a>
                  </li>
                  <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                      <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                  </li>
                </ul> 
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
               <p> Derechos reservados Pharma Investi Chile S.A. </p>
               <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
               <p> Teléfono:(2) 2340 5800 </p>
               <br>
               <hr size="8px" color="white">
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
                <div class="row footerSocial show-for-small-only">
                    <div class="small-12  columns">
                        <div class="row">
                            <div class="small-6 columns text-center" id="imgFacebookMobile">
                            <a href="https://www.facebook.com/ProcelarCL/"> 
                                <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com" style="height: 60px; width: 60px;">   
                             </a>
                            </div>
                             <div class="small-6 columns text-center">
                                 <a href="https://www.instagram.com/procelarcl"> 
                                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/instagramLogo.svg" class="attachment-full size-full wp-post-image" alt="www.instagram.com" style="height: 60px; width: 60px;">
                                  </a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="columns small-12 footermenu text-center" id="imgLogoFooter2Mobile">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt="" style="margin-top: 20px;"> 
                </div>     
            </div>
        </footer>
    </div>
 
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.interchange.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/app.js"></script>
  

</body>
</html>


</body>
</html>