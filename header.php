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
      <?php
      if (is_home() ) {
      // index.php blog posts  ---------------- ----------------
      ?>
      <h1>Archive test2</h1>
       <section id="" class="all-posts-hero page-hero">
         <span class="page-background">
            <img class="page-background-image" src="                  <?php
            the_post_thumbnail_url();
            ?>">
            <span class="page-background-color">
            </span> 
         </span>
         <header>
            <div class="links">
               <a href="#" > <div class="logo"></div></a>
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
            <div class="column"></div>
         </header>
         <div class="hero-content">
            <h1>
               
            <span class="text-primary top">All</span><br/><span class="bottom">Posts</span>
            </h1>
            <div class="page-hero-motif">
               <img class="hero-image" src="                  <?php
                     the_post_thumbnail_url("thumbnail");
                     ?>">
               <div class="backdrop"></div>
            </div>
         </div>
      </section>

      <div class="page-wrap">
         <main>
      <?php
      }
      elseif (get_post_type() === 'post') {
      // POST  ---------------- ----------------
      
      ?>
      <h1>Post test3</h1>
         
      <section class="post-hero">
         <header>
            <div class="links">
               <a href="#" > <div class="logo"></div></a>
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
         <div class="hero-content">
            <h1>ART PRACTICE</h1>
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_the_date(); ?></p>
            <p><strong>Tags:</strong> <?php 
            $post_tags = get_the_tags();
 
            if ( $post_tags ) {
                foreach( $post_tags as $tag ) {
                echo $tag->name . ', '; 
                }
            }
            ?></p>
         </div>
      </section>
      <div class="page-wrap">
      <?php
      }
      elseif (is_front_page() ) {
      //Static home page ---------------- ----------------
      ?>
      <h1>Home test 4</h1>
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
      <?php
      }
      elseif (get_post_type() === 'page') {
      // PAGE  ---------------- ----------------
      ?>
      <h1>Page test 4</h1>
            <section id="" class="
               <?php
               $mykey_values = get_post_custom_values('hero-type');
               
               foreach( $mykey_values as $key => $value ) {
               	echo "$value ";
               }

               ?>
            
            page-hero">
               
                  <span class="page-background">
                     <img class="page-background-image" src="                  <?php
                     the_post_thumbnail_url();
                     ?>">
                     <span class="page-background-color">
                     </span> 
                  </span>

               
         <header>
            <div class="links">
               <a href="#" > <div class="logo"></div></a>
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
            <div class="column"></div>
         </header>
         <div class="hero-content">
            <h1>
               
               <?php
               $mykey_values = get_post_custom_values('display-header');
               
               foreach( $mykey_values as $key => $value ) {
               	echo "$value";
               }

               ?>
            </h1>
            <div class="page-hero-motif">
               <img class="hero-image" src="                  <?php
                     the_post_thumbnail_url("thumbnail");
                     ?>">
               <div class="backdrop"></div>
            </div>
         </div>
      </section>

      <div class="page-wrap">
         <main>

      <?php
      }
      ?>
