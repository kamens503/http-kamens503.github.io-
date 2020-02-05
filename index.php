<!doctype html>
<html ⚡ lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="This is the AMP Boilerplate.">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <link rel="preload" href="./assests/bg_banner_360x193.jpg" as="image">
    <!-- <link rel="preload" href="./assests/logo_cerrajeriaPalermo.svg" as="image"> -->
    <link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com/" crossorigin>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <!-- Import other AMP Extensions here -->
    <?php include_once "./amp-import.php" ?>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700&display=swap" rel="stylesheet">
    <style amp-custom>
    <?php include "./css/app.css" ?>
    </style>
    <style amp-boilerplate>
      body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}
      @-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
      @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    <noscript>
      <style amp-boilerplate>
        body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
      </style>
    </noscript>

    <link rel="canonical" href=".">
    <title>Cerrajería Palermo</title>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Webpage",
        "url": "TODO",
        "name": "Cerrajería Palermo",
        "headline": "Atención a las 24 horas",
        "description": "Atención a las 24 horas en Palermo Chico, Plaza italia, Palermo Soho, Cañitas y alrededores",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "TODO"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Atomika",
          "logo": {
            "url": "https://www.atomika.net/es/",
            "width": 175,
            "height": 60,
            "@type": "ImageObject"
          }
        },
        "image": {
          "@type": "ImageObject",
          "url": "https://www.example.com/leader.png",
          "width": 1200,
          "height": 630
        }
      }
    </script>
  </head>
  <body>
    <header id="Nav-wrapper">
      <section class="nav">
        <amp-img src="./assests/logo_cerrajeriaPalermo.svg"
                 width="184"
                 height="38"
                 layout="fixed"
                 alt="Logo cerrajería Palermo"
                 class="logo_nav">
        </amp-img>
      </section>
      <section class="sub-nav">
        <p><b>Llama</b> 7078-0126</p>
      </section>
    </header>
    <article id="Banner">
      <amp-img src="./assests/bg_banner_360x193.jpg"
               width="360"
               height="193"
               layout="fill"
               alt="Cerrajero trabajando creando llaves"
               class="bg_banner">
      </amp-img>
      <header>
        <h1 class="title">Atención las 24 horas</h1>
        <h3 class="subtitle">Palermo Chico, Plaza italia, Palermo Soho, Cañitas y alrededores</h3>
      </header>

    </article>
    <article id="Beneficios">
      <section class="beneficio">
        <amp-img src="./assests/icon_check.svg"
                 width="22"
                 height="20"
                 layout="fixed"
                 alt="icono de checkbox"
                 class="logo_nav">
        </amp-img>
        <h3>Factura</h3>
      </section>
      <section class="beneficio">
        <amp-img src="./assests/icon_check.svg"
                  width="22"
                  height="20"
                 layout="fixed"
                 alt="icono de checkbox"
                 class="logo_nav">
        </amp-img>
        <h3>Tarjetas de crédito</h3>
      </section>
      <section class="beneficio">
        <amp-img src="./assests/icon_check.svg"
                 width="22"
                 height="20"
                 layout="fixed"
                 alt="icono de checkbox"
                 class="logo_nav">
        </amp-img>
        <h3>Garantía</h3>
      </section>
    </article>
    <article id="Breather-tiempo">
      <header>
        <amp-img src="./assests/icon_tiempo.svg"
                 width="30"
                 height="27"
                 layout="fixed"
                 alt="Icono de rapidez de atención"
                 class="icon">
        </amp-img>
        <h2 class="title">¡Llegamos en menos de 30 minutos!</h2>
      </header>
      <amp-img src="./assests/bg_breather01.jpg"
               width="360"
               height="140"
               layout="fill"
               alt="Cerrajero trabajando creando llaves"
               class="bg_breather">
      </amp-img>
    </article>
    <article id="Servicios">
      <h3 class="serv-title">Servicio</h3>
      <section class="servicio">
        <h2>Apertura de puertas</h2>
      </section>
      <section class="servicio">
        <h2>Cambios de cerradura y combinación</h2>
      </section>
      <section class="servicio">
        <h2>Cerrajería Automotor</h2>
      </section>
      <section class="servicio">
        <h2>Aperturas judiciales</h2>
      </section>
    </article>
    <article id="Breather-atencion">
      <header>
        <h2 class="title">Atención a <br>consorcios y empresas</h2>
      </header>
      <amp-img src="./assests/bg_breather02.jpg"
               width="360"
               height="140"
               layout="fill"
               alt="Conjunto de llaves colgadas"
               class="bg_breather">
      </amp-img>
    </article>
    <article id="Ending-wrapper">
      <section class="mercado-pago">
        <amp-img src="./assests/logo_mercadoPago.svg"
                 width="98"
                 height="70"
                 layout="fixed"
                 alt="Logo de mercado pago"
                 class="logo_nav">
        </amp-img>
        <h3>Aceptamos todas las tarjetas de crédito y mercadopago</h3>
      </section>
      <hr>
      <section class="garantia">
        <amp-img src="./assests/icon_garantia.svg"
                 width="26"
                 height="40"
                 layout="fixed"
                 alt="Icono de garantía">
        </amp-img>
        <h3>Trabajos con garantía y factura</h3>
      </section>
    </article>
    <article id="Zona">
      <address>
        <amp-img src="./assests/icon_pin.svg"
                 width="16"
                 height="22"
                 layout="fixed"
                 alt="Icono pin de mapa">
        </amp-img>
        <h3>Zonas</h3>
        <p class="zona-text">Palermo Chico, Plaza italia, Palermo Soho, Cañitas y alrededores</p>
        <span><b>Llama</b><p>7078-0126</p></span>
      </address>
      <section class="google-map">
        <amp-img src="./assests/map_placeholder.jpg"
                 width="360"
                 height="200"
                 layout="fill"
                 alt="Mapa de donde localizar la cerrajería Palermo"
                 class="bg_map">
        </amp-img>
      </section>
      <small>© Copyright 2017  <br>
Todos los Derechos Reservados -  Design by GowAds</small>
    </article>
  </body>
</html>
