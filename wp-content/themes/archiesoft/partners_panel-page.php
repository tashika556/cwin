<section id="who_work_with" class="padding bg_gray position-relative bg_button_icon">
   <div class="container">
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-md-8 m-auto">
            <div class="seven">
               <h1>Working Partners</h1>
            </div>
         </div>
      </div>
      <div class="row">

                  <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'partners',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => ' partners',
                'posts_per_page' => 20,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                        <div class="col-md-3 col-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="work_with_logo text-center mb-5">
                     <div class="work_with_img">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                     </div>
                     <div class="work_with_text">
                        <h4><a href="<?php the_field('link_one'); ?>" target="_blank"><?php the_title(); ?></a></h4>
                     </div>
                  </div>
               </div>
                  
                   
         <?php endwhile;
           wp_reset_postdata(); ?>   
             
    

                  </div>
   </div>
</section>