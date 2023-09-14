<!-- Template Name: Home Page -->
<?php get_header(); ?>
<section id="slider">
   <ul class="slide">
      <?php $images = get_field('images');
      if($images):
         foreach($images as $image): ?>
      <li class="item">
      <div style="background-image:url(<?php echo $image['url']; ?>);"></div>   
      </li>
<?php endforeach;
endif; ?>
   </ul>
   <div class="page_link">
         <ul>
            <li><a href="#we_work" title="WHERE WE WORK">Where We Work</a></li>
            <li> <a href="#program" title="THEMATIC AREA">Thematic Area</a></li>
            <li> <a href="#events" title="OUR WORKS"> Our Works</a></li>
            <li> <a href="#news_section" title="CWIN IN ACTION">CWIN in Action</a></li>
            <li> <a href="#reports" title="PUBLICATIONS"> Publications</a></li>
            <li> <a href="#who_work_with" title="WORKING PARTNERS">Working Partners</a></li>
         </ul>
      </div>
</section>
<section class="home-child-right">
  <a href="https://cwin.org.np/assets/public/img/children-are-national-pride-2079.pdf" title="Click for Details" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/child-right-bg.jpg" class="img-fluid" alt=""></a>
    </section>
<section id="three_block" class="bg_gray padding">
   <div class="container">
      <div class="row">
                
      <?php
$page_ids = array(20, 26, 29); // Replace with your actual page IDs

// Custom WP Query
$args = array(
    'post_type' => 'page',
    'post__in' => $page_ids,
    'orderby' => 'post__in',
);

$query = new WP_Query($args);

// Start the loop
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Check if the current page is page 29
        if (get_the_ID() == 29) {
            // Custom design for page 29
            ?>
            <div class="col-lg-4 col-sm-12">
                <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="three-blockpanel text-center">
                        <div class="three_block_img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="three_block_content">
                            <h3><?php the_title(); ?></h3>
                            <p><a href="<?php the_field('link_one') ?>" target="_blank"><strong> iOS</strong></a> | <a href="<?php the_field('link_two') ?>" target="_blank"><strong> Android</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            // Common design structure for other pages
            ?>
            <div class="col-lg-4 col-sm-12">
                <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="three-blockpanel text-center">
                        <div class="three_block_img">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="three_block_content">
                            <h3><a href="<?php the_field('link_one') ?>" target="_blank"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    endwhile;
    wp_reset_postdata(); // Reset post data
else :
    // No posts found
endif;
?>

     
      </div>
   </div>
</section>
<section id="we_work" class="position-relative padding bg_white bg_button_icon">
   <div class="container">
      <div class="row">
         <div class="col-md-8 m-auto wow fadeInUp">
            <div class="seven">
               <h1>WHERE WE WORK</h1>
            </div>
         </div>
      </div>
      <div class="row wow fadeInUp">
         <div class="col-md-12">
            <div class="map_block">
               <div class="img_map position-relative">
                
                  <img src="<?php echo get_template_directory_uri();?>/img/map.png" class="w-100 img-fluid" alt="">
              
               </div>
            </div>
         </div>
         <div class="col-md-8 m-auto">
            <div class="we_work_content text-center mt-md-5 mt-2">
            <h1>
    <?php
    $summary = get_field('summary');
    $summary = str_replace('1987', '<span style="color: red;">1987</span>', $summary);
    $summary = str_replace('children living', '<span style="color: red;">children living</span>', $summary);
    echo $summary;
    ?>
</h1>

            </div>
         </div>
      </div>
   </div>
</section>
<section id="program" class="padding bg_gray position-relative bg_button_icon_right">
   <div class="container">
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-md-8 m-auto">
            <div class="seven">
               <h1>Thematic Area</h1>
            </div>
         </div>
      </div>
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          
      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'thematic',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'thematic-area',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
                  <div class="col-lg-3 col-md-6 col-12 wow fadeInUp mb-4" style="visibility: visible; animation-name: fadeInUp;">
              <div class="three_block p-3">
                <div class="three_block_img">
                    <a href="<?php the_permalink(); ?>"> <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>"></a>
                </div>
                <div class="program_content text-center">
                    <h3 class="mb-2"><?php the_title(); ?></h3>
                  
                                              <p>
                            <a href="<?php the_permalink(); ?>"><?php the_field('summary'); ?></a>
                      
                                          <p>
                                    </div>
              </div>
          </div>
         
          <?php endwhile;
           wp_reset_postdata(); ?>
 
       
               </div>
   </div>
</section>
<section id="events" class="padding">
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-md-8 m-auto">
            <div class="seven">
               <h1>OUR WORKs</h1>
            </div>
         </div>
      </div>
   
      <div class="row">

      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'work',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => 'work',
                'posts_per_page' => 20,
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
<section id="news_section" class="padding bg_gray news_section">
   <div class="container">
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="col-md-8 m-auto">
            <div class="seven">
               <h1>CWIN in Action</h1>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'news',
                'orderby' => 'date',
                'category_name' => 'news',
                'posts_per_page' => 1,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
         <div class="col-lg-6 col-md-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="news_men position-relative mb-lg-0 mb-4 ">
               <div class="news_img">
                  <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
               </div>
               <div class="news_date">
                  <h4><strong><?php echo get_the_date('d'); ?></strong> <br>
                     <small><?php echo get_the_date('M'); ?></small>
                  </h4>
               </div>
               <div class="news_des bg-white">
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <p><?php echo get_the_date(); ?></p>
                  <?php the_field('summary'); ?>
</div>
            </div>
         </div>
         <?php endwhile;
           wp_reset_postdata(); ?>
         <div class="col-lg-6 col-md-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="new_list_items">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'news',
                'orderby' => 'date',
                'category_name' => 'news',
                'offset'=>1,
                'posts_per_page' => 3,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
            
                           <div class="news-listing-panel d-flex bg-white">
                  <div class="news_list_img">
                     <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="img">
                  </div>
                  <div class="news_list_des p-4">
                     <div class="time-location-panel">
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date(); ?></p>
                     </div>
                     <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  </div>
               </div>
               <?php endwhile;
           wp_reset_postdata(); ?>       
                           </div>
         </div>
      </div>
            <div class="row ">
         <div class="col-md-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="btn_news mt-lg-4 mt-md-3 mt-ms-2 mt-1 text-center">
               <a href="https://cwin.org.np/news" class="btn third">View All
               </a>
            </div>
         </div>
      </div>
         </div>
</section>
<section id="reports" class="padding bg_white">
   <div class="container">
      <div class="row wow fadeInUp">
         <div class="col-md-8 m-auto">
            <div class="seven">
               <h1>Publications</h1>
            </div>
         </div>
      </div>
      <div class="row">

                 <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'publications',
                'orderby' => 'date',
                'category_name' => 'publication',
                'posts_per_page' => 6,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
      <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="news-listing-panel d-flex bg-white p-4">
               <div class="news_list_des">
                  <div class="time-location-panel">
                     <p class=" mb-0"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
                  </div>
                  <h5 class="mb-0">
                  <?php
$file_upload = get_field('file_upload'); // Get the file upload field value
?>
                  <?php if ($file_upload) { ?>
<a href="<?php echo esc_url($file_upload); ?>" download>
<?php the_title(); ?>
<?php } else { ?>
<a href="#"><?php the_title(); ?>
<?php } ?>
</a>
</h5>
               </div>
               <?php
$file_upload = get_field('file_upload'); // Get the file upload field value
?>
<?php if ($file_upload) { ?>
<a href="<?php echo esc_url($file_upload); ?>" download id="donwloader">
<?php } else { ?>
<a href="#" id="donwloader">
<?php } ?>
<svg width="50" height="50" viewBox="0 0 40 40" class="mt-0">
    <path id="arrow wow fadeInUp" d="m20 4 v14 m-5 -5 l5 5 5 -5"></path>
    <path id="base" d="m10 28 v4 h 20 v-4"></path>
</svg>
</a>


            </div>
         </div>
        
         <?php endwhile;
           wp_reset_postdata(); ?> 
      </div>
      <div class="row">
         <div class="col-md-12  wow fadeInUp">
            <div class="btn_news mt-lg-4 mt-md-3 mt-ms-2 mt-1 text-center">
               <a href="<?php echo get_page_link(284); ?>" class="btn third">View All
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'partners_panel-page.php'; ?>
<!-- <a class="" id="button"></a> -->
<a class="" id="button"></a>
<?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'category_name' => 'notice',
                'posts_per_page' => 1,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
<div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body text-center">
                  <?php
$file_upload = get_field('file_upload');
$link_one = get_field('link_one');
$link_two = get_field('link_two');

if (!empty($file_upload)) {
    $link = $file_upload;
} elseif (!empty($link_one)) {
    $link = $link_one;
} else {
    $link = $link_two;
}
?>

<a href="<?php echo esc_url($link); ?>" target="_blank" title="Click for more information"><?php the_content(); ?></a>

                 <p> <a href="<?php echo esc_url($link); ?>" target="_blank" class="btn btn-success">READ MORE</a></p>
                 
               </div>
            </div>
         </div>
      </div>
      <?php endwhile;
           wp_reset_postdata(); ?>
<?php get_footer(); ?>
