<!--Template Name: Announcement Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="advocacy_through" class="padding bg_button_icon position-relative">
   <div class="container">
   <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'announcements',
                    'orderby' => 'date',
                    'category_name' => 'announcements',
                    'posts_per_page' => 1,
                    'paged' => $paged
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                    ?>
<div class="row">
               <div class="col-md-9 mx-auto">
                  <div class="blog_men_block bg-white">
                     <div class="news_detail mt-3">
                        <div class="title-announcement mx-auto text-center">
                        <h3><?php the_title(); ?>
                        </h3>
                        <hr>
                        </div>
                       <?php the_content(); ?>
                       <hr>
                                    </div>
                  </div>
               </div>
            </div>

      <?php endwhile;
                wp_reset_postdata(); ?>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>