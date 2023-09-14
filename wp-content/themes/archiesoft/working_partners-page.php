<!-- Template Name: Working Partners Page -->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="who_work_with" class="padding ">
   <div class="container">
      <!-- tab  -->
      <ul class="tabs mb-4">
         <li class="tab-link current mr-md-5 mr-2" data-tab="tab-1">PARTNERS</li>
         <li class="tab-link" data-tab="tab-2">AFFILIATED</li>
      </ul>
      <div id="tab-1" class="tab-content current">
         <div class="row">
         <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'partners',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'partners',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                         
                           <div class="col-md-3 col-6 wow fadeInUp" style="visibility: hidden; animation-name: none;">
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
      <div id="tab-2" class="tab-content">
         <div class="row">
         <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'partners',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'affiliated',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                         
                           <div class="col-md-3 col-6 wow fadeInUp" style="visibility: hidden; animation-name: none;">
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
   </div>
   
</section>
<?php get_footer(); ?>