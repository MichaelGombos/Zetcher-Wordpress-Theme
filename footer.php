
      
      </div>
      <footer>
         <div class="links">
            <a href="	
<?php echo get_home_url(); ?>" > <div class="logo"></div></a>
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