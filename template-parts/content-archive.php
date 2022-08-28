
               <div class="post">
                  <h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="h5 time text-light">
                     <svg width="9" height="12" viewBox="0 0 9 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M8.16356 3.5595C8.70244 2.988 9 2.271 9 1.5415V0H0V1.5415C0 2.271 0.297 2.9875 0.836437 3.559L2.57231 5.399C2.89125 5.7375 2.8935 6.2115 2.57737 6.552L0.81675 8.449C0.29025 9.017 0 9.7265 0 10.4465V12H9V10.4465C9 9.7265 8.70919 9.0175 8.18269 8.4495L6.42206 6.5525C6.10594 6.212 6.10819 5.738 6.42712 5.3995L8.16356 3.5595ZM5.55412 7.188L7.31475 9.085C7.6815 9.481 7.875 9.948 7.875 10.5H1.125C1.125 9.948 1.31794 9.4805 1.68525 9.0855L3.44531 7.189C4.10175 6.482 4.09725 5.4595 3.43462 4.757L1.69875 2.9165C1.3275 2.524 1.125 2.0485 1.125 1.4995H7.875C7.875 2.05 7.67081 2.5245 7.30125 2.9165L5.56481 4.7565C4.90275 5.459 4.89825 6.482 5.55412 7.188Z" fill="#3A3A3A"></path>
                     </svg>
                     <p>
                         <?php
                         echo get_the_date();
                         ?>
                     </p>
                  </div>
                  <p class="overflow-text-2">
                      <?php
                        echo get_the_excerpt();
                        ?>
                  </p>
                  <img class="preview-image" src="
                  <?php
                  the_post_thumbnail_url("thumbnail");
                  ?>
                  ">
                  <div class="long-button">
                     <div class="button-top"></div>
                     <a class=" button" href="<?php the_permalink(); ?>">Continue Reading</a>
                  </div>
               </div>



