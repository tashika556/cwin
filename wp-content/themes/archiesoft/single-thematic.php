<?php get_header(); ?>
<section id="banner" style="" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="thematic_page" class="padding  bg_button_icon position-relative">
   <div class="container">
<?php if(have_posts()) : while(have_posts()): the_post();
the_content();
endwhile;
endif; ?>
   </div>
</section>
<?php get_footer(); ?>