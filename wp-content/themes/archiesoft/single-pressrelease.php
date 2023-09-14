<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="news_detail" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="col-md-12">
                  <div class="blog_men_block bg-white">
                     <div class="blog_img">
                        <a href=""><img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                     </div>
                     <div class="date_block text-center">
                        <h2><strong><?php echo get_the_date('d'); ?></strong><small><?php echo get_the_date('M'); ?></small></h2>
                     </div>
                     <div class="news_detail mt-3">
                        <h3>
                           <a href="#" class="text-dark font-weight-bold"><?php the_title(); ?></a>
                        </h3>
   <?php if(have_posts()):while(have_posts()):the_post();
   the_content();
endwhile;
endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="news_right_block ">
               <div class="news_right_title">
                  <h2>Recent Press Release</h2>
               </div>

               <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'pressrelease',
                'orderby' => 'date',
                'category_name' => 'press-release',
                'posts_per_page' => 3,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                                 
                                 <div class="news_right_two d-flex px-3">
                     <div class="news_right_date text-center">
                        <h2 class="mb-0"><strong><?php echo get_the_date('d'); ?></strong><small><?php echo get_the_date('M'); ?></small></h2>
                     </div>
                     <div class="news_right_title_sub pl-3 d-flex align-items-center">
                        <a href="<?php the_permalink(); ?>">
                           <h3 class=" font-weight-bold"><?php the_title(); ?></h3>
                        </a>
                     </div>
                  </div>
                  <hr>

                  <?php endwhile;
           wp_reset_postdata(); ?>
                           </div>
         </div>
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>
