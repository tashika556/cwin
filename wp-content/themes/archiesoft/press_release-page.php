<!-- Template Name: Press Release Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="news_page" class="padding  bg_button_icon position-relative">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-12">
            <div class="row">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'pressrelease',
                'orderby' => 'date',
                'category_name' => 'press-release',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>

                                 <div class="col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                     <div class="blog_men_block">
                        <div class="blog_img">
                           <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                        </div>
                        <div class="blog_text_block bg_gary_new text-center">
                           <h3>
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </h3>
                        </div>
                        <div class="date_block text-center">
                           <h2><strong><?php echo get_the_date('d'); ?></strong><small><?php echo get_the_date('M'); ?></small></h2>
                        </div>
                     </div>
                  </div>
                     
                  <?php endwhile;
           wp_reset_postdata(); ?>

            </div>
         </div>
         <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="news_right_block ">
               <div class="news_right_title">
                  <h2>Categories</h2>
               </div>
               <div class="news_right_two d-flex px-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="news_right_title_sub pl-3 d-flex align-items-center">
                     <a href="<?php echo get_page_link(362); ?>">
                        <h3 class=" font-weight-bold ">News </h3>
                     </a>
                  </div>
               </div>
               <hr>
               <div class="news_right_two d-flex px-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="news_right_title_sub pl-3 d-flex align-items-center">
                     <a href="<?php echo get_page_link(863); ?>">
                        <h3 class=" font-weight-bold ">Announcements</h3>
                     </a>
                  </div>
               </div>
               <hr>
               <div class="news_right_two d-flex px-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="news_right_title_sub pl-3 d-flex align-items-center">
                     <a href="<?php echo get_page_link(858); ?>">
                        <h3 class=" font-weight-bold ">Fact Sheets</h3>
                     </a>
                  </div>
               </div>
               <hr>
            </div>
         </div>
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>