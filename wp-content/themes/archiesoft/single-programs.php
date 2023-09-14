<?php get_header(); ?>

<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="program_time" class="bg_white ">
   <div class="container">
      <div class="row">
         <div class="col-lg-10 col-md-8 col-12 m-auto">
            <div class=" ">
               <div class="row">
                  <div class="col-lg-6 col-12 wow fadeInUp ">
                     <div class="program_time_title mb-lg-0 mb-4 wow fadeInLeft">
                        <h1 class=""><span><?php the_title(); ?></span> Program</h1>
                <?php the_field('summary'); ?>
                     </div>
                  </div>
                  <div class="col-lg-6 col-12 wow fadeInUp">
                     <div class="program_time_right wow fadeInRight">
                        <ul>
                           <li>
                              <span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php the_field('location'); ?>
                           </li>
                           <li>
                           <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> <?php the_field('date'); ?>
                           </li>
                           <li>
                           <span><i class="fa fa-user-o" aria-hidden="true"></i></span> <?php the_field('people_participated'); ?>
                           </li>
                           <li>
                           <span><i class="fa fa-users" aria-hidden="true"></i></span> <?php the_field('partner'); ?>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="padding bg_button_icon position-relative">
   <div class="container">
      <div class="row ">
         <div class="col-md-6 col-12 col-12 wow fadeInUp">
            <div class="img_program">
               <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-md-6 col-12 col-12 wow fadeInUp">
            <div class=" program_title d-flex justify-content-center h-100 flex-column">
               <h2 class="font-weight-bold mt-0"><?php the_title(); ?></h2>
               <?php if(have_posts()):while(have_posts()):the_post();
          the_content();
endwhile;
endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
$process= get_field('process');
if (!empty($process)) {
    ?>
<section id="about_video" class="bg_gray padding">
   <div class="container">
      <div class="row " style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-md-6 wow fadeInUp">
            <div class="white_arrow black_white_arrow program_title section_sub_title d-flex flex-column justify-content-center h-100">
               <h2 class="mb-0 font-weight-bold mt-0 text-white mb-3">Process:</h2>
               <?php
        $modified_process = add_h6_tags_to_li($process); 
        echo '<div class="content">' . $modified_process . '</div>';
        ?>
            </div>
         </div>
         <div class="col-md-6 wow fadeInUp col-12 col-12">
            <div class="img_program d-flex align-items-center justify-content-center h-100 ">
               <?php $image = get_field('image_one'); ?>
               <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<?php
}
?>
<?php
$issues = get_field('issues');
if (!empty($issues)) {
    ?>
    <section id="about_video" class="bg_white_main padding">
        <div class="container">
            <div class="row" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-md-6 wow fadeInUp col-12 col-12">
                    <div class="img_program d-flex align-items-center justify-content-center h-100">
                        <?php $image = get_field('image_two'); ?>
                        <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp">
                    <div class="black_arrow black_white_arrow program_titles section_sub_title d-flex flex-column justify-content-center h-100">
                        <h2 class="mb-0 font-weight-bold mt-0 mb-3">Issues:</h2>
                        <?php
                        $modified_issues = add_h6listauto_tags_to_li($issues);
                        echo '<div class="content">' . $modified_issues . '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
<?php
$program= get_field('program');
if (!empty($program)) {
    ?>
<section id="about_video" class="bg_gray_main padding ">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-12 wow fadeInUp">
            <div class="program_title d-flex justify-content-center h-100 flex-column">
               <h2 class="text-dark font-weight-bold mt-0">CWIN Program </h2>
             <?php  the_field('program'); ?>
            </div>
         </div>
         <div class="col-lg-6 col-12 wow fadeInUp">
            <div class="video_block mt-lg-0 mt-3">
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="<?php the_field('program_url'); ?>"></iframe>
                  <a href="" class="sigma_video-btn"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
               </div>
              
            </div>
         </div>
      </div>
   </div>
</section>
<?php
}
?>
<a class="" id="button"></a>
<?php get_footer(); ?>