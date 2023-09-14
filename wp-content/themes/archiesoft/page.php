<!--Template Name:Default Template -->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section class="gallery position-relative padding">
   <div class="row">
      <div class="container">
         <div class="col-lg-12">
            <div class="gallery-img">
            <?php if(have_posts()):while(have_posts()):the_post();
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