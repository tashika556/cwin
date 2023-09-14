<!--Template Name: CWIN policies-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="history" class="bg_img_banner bg_img_banner_right padding ">
   <div class="container">
      <div class="row">
         <div class="col-md-8 m-auto">
         <div class="title_border mb-5">
            <div class="twelve">
          <?php if(have_posts()):while(have_posts()):the_post();
          the_content();
endwhile;
endif; ?>
            </div>
           
              </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="admission_block d-flex">
               <div class="twelve text-left pr-4 position-relative">
             <?php the_field('details_one'); ?>
      
               </div>
               <div class="twelve text-left pl-4">
               <?php the_field('details_two'); ?>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>