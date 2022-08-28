<?php
   get_header();
?>
      

            <section class="page-content">
              <?php
                 if( have_posts() ){
                    while (have_posts() ){
                    the_post();
                    the_content();
                    }
                 }
              ?>
            </section>
         </main>
         <aside>
            <?php
            dynamic_sidebar('sidebar-1');
            ?>
         </aside>

      
<?php
get_footer();
?>