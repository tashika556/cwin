<!--Template Name: Profile Page-->
<?php get_header(); ?>
<section id="banner-profile" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="position-relative">
 <div class="sub_banner_round sub_banner_round_one text-white">
      <h2>Vision</h2>
    <?php the_field('vision'); ?>
   </div>
   <div class="sub_banner_round sub_banner_round_two text-white">
   <h2>Mission</h2>
   <?php the_field('mission'); ?>
   </div>
</section>
<section id="profile_three_box" class="position-relative  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
     <div class="col-md-8 m-auto">
        <div class="seven ">
           <h1>Values</h1>
        </div>
     </div>
  </div>
  <div class="row  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-lg-8 m-auto text-center">
            <div class="inner_page_titles mb-5 mt-3 text-white">
            <?php the_field('values'); ?>
            </div>
         </div>
      </div>
</section>
<section id="profile_page" class=" padding bg_gray">
   <div class="container">
      <div class="row  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-lg-8 m-auto text-center">
            <div class="profile_left_block">
               <?php $image=get_field('image_one'); ?>
               <div class="profile_img"><img src="<?php echo $image['url']; ?>" class="img-fluid" alt=""></div>
            </div>
            <div class="inner_page_titles mb-5 mt-3">
               <h2>Introduction</h2>
<?php if(have_posts()): while(have_posts()): the_post();
the_content();
endwhile;
endif; ?>
       </div>
         </div>
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>