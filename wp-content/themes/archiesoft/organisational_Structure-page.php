<!-- Template Name: Organizational Structure-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="team_page" class=" content-section padding bg_gray">
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-md-8 m-auto">
            <div class="seven ">
               <h1>Executive Board</h1>
            </div>
         </div>
      </div>
      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'team',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'executive-boards',
                'posts_per_page' => 1,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
      <div class="row no-gutters mb-4">
         <div class="col-md-6  wow fadeInLeft">
            <div class="team-single-img ">
               <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded shadow-sm ">
            </div>
         </div>
         <div class="col-md-6 wow fadeInRight ">
            <div class="team-detail-men ">
               <div class="team-name mb-2 ">
                  <h2><?php the_title(); ?></h2>
                  <h4 class="mb-1 "><?php the_field('designation'); ?></h4>
               </div>
               <ul class="team-single-info ">
                  <li class="mb-1 "><strong>Phone:&nbsp;</strong><span><?php the_field('phone'); ?></span></li>
                  <li><strong>Email:&nbsp;</strong><span><?php the_field('email'); ?></span></li>
               </ul>
               <div class="inner_page_title">
              
               <div class="readmore__content">
                  <?php the_content(); ?>
               </div>
               <button class="readmore__toggle custom-btn theme_btn border-0" role="switch" aria-checked="true">
               Show more
               </button>
            </div>
               
            </div>
         </div>
      </div>
      <?php endwhile;
           wp_reset_postdata(); ?>
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

         <div class="col-lg-4 col-md-6 col-12">
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
<section class="padding">
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-md-8 m-auto">
            <div class="seven ">
               <h1>Management Committee </h1>
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
                'category_name' => 'management-commitee',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
         <div class="col-lg-4 col-md-6 col-12">
            <div class="team_block bg-white">
               <h3><?php the_title(); ?></h3>
               <h4><?php the_field('designation'); ?></h4>
            </div>
         </div>
         <?php endwhile;
           wp_reset_postdata(); ?> 
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>