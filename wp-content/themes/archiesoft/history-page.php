<!--Template Name: History Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="history" class="wow fadeInUp bg_img_banner bg_img_banner_right padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-12 wow fadeInUp">
            <div class="admission_block">
               <div class="twelve text-left">
                  <?php if(have_posts()):while(have_posts()):the_post();
            the_content();
endwhile;
endif; ?>
               </div>
            </div>
         </div>
            <div class="col-lg-5 col-12 wow fadeInUp">
            <div class="section_sub_title bg-white">
               <div class="twelve text-left">
                  <div class="title_border mb-4">
                     <h1>FOUNDERS OF CWIN :-</h1>
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table table-striped">
                     <tbody>
                     <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'team',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'executive-boards',
                'posts_per_page' => 20,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                        <tr>
                           <td><?php the_title(); ?></td>
                           <td><?php the_field('designation'); ?></td>
                        </tr>
                        <?php endwhile;
           wp_reset_postdata(); ?> 
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
            </div>


            <div class="row">
               <div class="col-lg-7 col-md-12">
               <div class="twelve text-left grey-box">
                  <?php the_field('details_one'); ?>
               </div>
            </div>
            <div class="col-lg-5 col-md-12">
               <div class="twelve text-left grey-box-border">
               <?php the_field('details_two'); ?>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</section>
<section id="events" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-8 m-auto wow fadeInUp">
            <div class="seven">
               <h1>OUR WORKs</h1>
            </div>
         </div>
      </div>
      <div class="row ">

      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'work',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'work',
                'posts_per_page' => 30,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>

         <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp">
            <div class="video_block">
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="<?php the_field('link_one'); ?>"></iframe>
               </div>
               <h4><?php the_title(); ?></h4>
            </div>
         </div>
     
         <?php endwhile;
           wp_reset_postdata(); ?>

      </div>
   </div>
</section>
<?php include 'partners_panel-page.php'; ?>
<a class="" id="button"></a>
<?php get_footer(); ?>