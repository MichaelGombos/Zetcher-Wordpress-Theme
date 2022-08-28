<?php
   get_header();
?>
      

            <section class="page-content">
              <?php
                 if( have_posts() ){
                    while (have_posts() ){
                    the_post();
                    
                    get_template_part('template-parts/content',"page");
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