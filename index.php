<?php
   get_header();
?>
      
            <section class="page-content">
                <section id="posts">
                  <?php
                     if( have_posts() ){
                        while (have_posts() ){
                        the_post();
                        get_template_part("template-parts/content","archive");
                        }
                     }
                  ?>
                 </section>
                 <?php
                    the_posts_pagination();
                ?>
            </section>
         </main>

      
<?php
get_footer();
?>