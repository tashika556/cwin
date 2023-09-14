<!-- Template Name: About Page -->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="banner_content text-white ">
      <h2><?php the_title(); ?></h2>
      <p><?php the_field('summary'); ?></p>
   </div>
</section>
<section id="introduction" class="bg_white bg_button_icon position-relative">
   <div class="container">
      <div class="row ">
         <div class="col-md-8 wow fadeInUp m-auto" style="visibility: visible; animation-name: fadeInUp;">
            <div class="seven">
               <h1>Brief Introduction to CWIN</h1>
            </div>
         </div>
      </div>
      <div class="row ">
         <div class="col-lg-6 wow fadeInUp mb-lg-0 mb-sm-5 mb-4" style="visibility: visible; animation-name: fadeInUp;">
            <div class="inner_page_title">
            <p><?php the_field('summary'); ?></p>
            </div>
            <div class="inner_page_title">
               <div class="about_teacher_content  pt-3">
                  
               </div>
               <div class="readmore__content">
                  <?php if(have_posts()): while(have_posts()) : the_post();
                  the_content();
endwhile;
endif; ?>
</div>
               <button class="readmore__toggle custom-btn theme_btn border-0" role="switch" aria-checked="true">Read More</button>
            </div>
         </div>
         <div class="col-lg-6 wow fadeInUp mb-lg-0 mb-md-5 mb-0" style="visibility: visible; animation-name: fadeInUp;">
            <div class="about_img">
               <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<section id="about_video" class="bg_gray padding objective-panel">
   <div class="container">
      <div class="row ">
         <div class="col-md-8 wow fadeInUp m-auto">
            <div class="seven">
               <h1>CWIN KEY OBJECTIVES</h1>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 wow fadeInUp col-12">
            <div class="video_block">
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="<?php the_field('youtube'); ?>"></iframe>
                  <a href="" class="sigma_video-btn"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 wow fadeInUp col-12">
    <div class="white_arrow black_white_arrow section_sub_title">
        <?php
        $objectives = get_field('objectives'); 
        $modified_objectives = add_h6_tags_to_li($objectives); 
        echo '<div class="content">' . $modified_objectives . '</div>';
        ?>
       <button class="read-more-objectives custom-btn theme_btn border-0" role="switch" aria-checked="true">Read More</button>
    </div>
</div>

      </div>
   </div>
</section>
<section id="team_page" class=" content-section padding ">
   <div class="container">
       <div class="row wow fadeInUp">
         <div class="col-md-8 m-auto">
            <div class="seven ">
               <h1>Executive Board</h1>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'team',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'offset'=>1,
                'category_name' => 'executive-boards',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
      
         <div class="col-lg-4">
            <div class="team_block bg-white">
            <h3><?php the_title(); ?></h3>
    <h4><?php the_field('designation'); ?></h4>
               <p class="mb-0 pb-0"><a class="toggle-trigger read_more_team">Read more</a></p>
               <div class="toggle-wrap" style="display: none;">
                  <div class="style-single">
                  <?php the_content(); ?>
                  </div>
               </div>
            </div>
         </div>

         <?php endwhile;
           wp_reset_postdata(); ?> 
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>