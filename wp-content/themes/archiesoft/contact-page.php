<!-- Template Name: Contact Page -->
<?php  get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>

<section id="contact_page" class="padding">
   <div class="container">
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      </div>
      <div class="row">
         <div class="col-lg-5 col-md-12 padding-right-0">
            <div class="contact-panel">
               <h2>Contact</h2>
               <h4>Address</h4>
               <p>  <?php the_field('address'); ?><br><?php the_field('address2'); ?></p>
               <h4>Phone</h4>
               <p>
               <?php the_field('phone'); ?><br>
               <?php the_field('phone2'); ?>               </p>
               <h4>Email</h4><p>
                                           <a href="mailto:<?php the_field('email'); ?>" class="text_white"><?php the_field('email'); ?> </a><br>
                                            <a href="mailto:<?php the_field('email2'); ?>" class="text_white"><?php the_field('email2'); ?></a><br>
                                     </p>
               <h4>Web</h4> <p><?php the_field('web'); ?> </p>
               <h4>Postal Code</h4> <p><?php the_field('postal_code'); ?> </p>
            </div>

         </div>
         <div class="col-lg-7 wow fadeInUp padding-left-0" style="visibility: visible; animation-name: fadeInUp;">
            <div class="form-panel">
                   <div class="map">
 <?php if(have_posts()) : while(have_posts()): the_post();
 the_content();
endwhile;
endif; ?>
   </div>
         </div>
         </div>
      </div>
   </div>
</section>


<a class="" id="button"></a>
<?php get_footer(); ?>