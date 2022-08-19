
      
      </div>
      <footer>
         <div class="links">
            <a href="#" > <img class="logo" src="./assets/template-logo/logo-white.svg"></a>
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
      </footer>
      
      <?php
         wp_footer();
      ?>
   </body>
</html>