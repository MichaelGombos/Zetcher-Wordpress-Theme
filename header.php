<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="author" content="Michael Gombos">
      <meta name="description" content="Static html site for future wordpress theme">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <?php
     wp_head();
     ?>
   </head>
   <body>
      <header>
         <div class="links">
            <a href="#" > <div class="logo" > </div></a>
            <nav>
               <?php
                  wp_nav_menu(
                    array(
                        "menu" => "primary",
                        "container" => "",
                        "theme_location" => "primary",
                        "items_wrap" => '<nav id="" class="">%3$s</ul>'
                     ) 
                  );
               ?>
            </nav>
         </div>
      </header>
      
      <div class="page-wrap">
         <main>
            <section id="hero">
               <h1 class="h1">EVER<br/><span class="text-primary">ETCH</span></h1>
               <div class="motif-square">
                  <img src="./assets/template-images/sections/hero.png">
                  <div class="backdrop"></div>
               </div>
            </section>