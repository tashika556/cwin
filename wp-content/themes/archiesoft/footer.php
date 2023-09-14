
<footer id="footer" class="position-relative pb-4 padding ">
   <div class="container ">
      <div class="row ">
         <div class="col-lg-4 col-12 ">
            <div class="footer-logo-box text_white ">
               <h4 class="text_white mb-2 mb-md-4 ">CWIN Nepal</h4>
               <p class="text-white pt-3">
               <?php the_field('summary',10); ?>
               </p>
            </div>
         </div>
         <div class="col-lg-2 col-6 ">
            <div class="footer-title text_white footer_after ">
               <h4 class="mb-2 mb-md-4 text_white ">About</h4>
               <ul class="text_white pl-0">
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(168); ?>" class="text_white ">History</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(183); ?>" class="text_white ">CWIN Profile</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(103); ?>" class="text_white ">Working Partners</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(379); ?>" class="text_white ">Photo Gallery</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(156); ?>" class="text_white ">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-2 col-6 ">
            <div class="footer-title text_white footer_after ">
               <h4 class="text_white mb-2 mb-md-4 ">Updates</h4>
               <ul class="pl-0">
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(362); ?>" class="text_white ">News</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php the_field('link_one',775); ?>" class="text_white ">Cwin Video</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(284); ?>" class="text_white ">Publications</a>
                  </li>
                  <li class="mb-2 ">
                     <a href="<?php echo get_page_link(843); ?>" class="text_white ">Events</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-12 mt-4 mt-lg-0 ">
            <div class="footer-title text_white footer_after ">
               <h4 class="text_white mb-2 mb-md-4 ">Address</h4>
               <ul>
                  <li class="text_white mb-2 mt-3 ">
                     <span class="pr-3 "><i class="fa fa-map-marker " aria-hidden="true "></i></span><?php the_field('address',156); ?>, <?php the_field('address2',156); ?>
                  </li>
                  <li class="text_white my-3 ">
                     <a href="" class="text_white "><span class="pr-3 "
                        ><i class="fa fa-phone " aria-hidden="true "></i
                        ></span ><?php the_field('phone',156); ?>, <?php the_field('phone2',156); ?></a>
                  </li>
                  <li>
                     <a href="mailto:<?php the_field('email',156); ?>" class="text_white "><span class="pr-3 "
                        ><i
                        class="fa fa-envelope-square "
                        aria-hidden="true "
                        ></i></span
                        > <?php the_field('email',156); ?></a
                        >
                  <li class="text_white my-3 ">
                     <a href="<?php the_field('email2',156); ?>" class="text_white "><span class="pr-3 "
                        ><i
                        class="fa fa-envelope-square "
                        aria-hidden="true "
                        ></i></span
                        ><?php the_field('email2',156); ?></a
                        >
                  </li>
               </ul>
               <ul class="footer_social_icon d-flex ">
                  <li class="logo-bg ">
                     <a href="<?php the_field('facebook',156); ?>" target="_blank" class="text-white "><i class="fa fa-facebook " aria-hidden="true "></i
                        ></a>
                  </li>
                  <li class="logo-bg ml-3">
                     <a href="<?php the_field('instagram',156); ?>" target="_blank" class="text-white "><i class="fa fa-instagram" aria-hidden="true "></i
                        ></a>
                  </li>
                  <li class="feature_in_bg ml-3 ">
                     <a href="<?php the_field('twitter',156); ?>" target="_blank" class="text-white"><i class="fa fa-twitter" aria-hidden="true "></i
                        ></a>
                  </li>
                  <li class="logo-bg ml-3 ">
                     <a href="<?php the_field('youtube',156); ?>" target="_blank" class="text-white"><i class="fa fa-youtube " aria-hidden="true "></i
                        ></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row ">
         <div class="col-md-12 text-center pb-3 pt-2 ">
            <p class=" text_white text-center font-weight-normal ">
               Copyright All Right Reserved <?php echo get_the_date('Y'); ?>.
               <span class="testimonial-title">Website by <a href="#" class="text_white">DigiSoft Developers</a> </span>
            </p>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.2.1.minn.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<div id="mySidenav" class="sidenav d-lg-none d-block">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav_two()">&times;</a>
   <ul class="mt-5">
      <li><a href="<?php echo get_page_link(10); ?>">Home</a></li>
      <li class=''>
         <a class='click_menu' href='#Foundations'>
            Who We Are
            <div ></div>
         </a>
         <ul class='show_menu'>
            <li><a href="<?php echo get_page_link(106); ?>">Introduction</a></li>
            <li><a href="<?php echo get_page_link(168); ?>">History Behind CWIN </a></li>
            <li><a href="<?php echo get_page_link(183); ?>">CWIN Profile - 2021</a></li>
            <li><a href="<?php echo get_page_link(159); ?>">Three Decades of Child Rights Movement in Nepal</a></li>
            <li><a href="<?php echo get_page_link(128); ?>">Organisational Structure</a></li>
            <li><a href="<?php echo get_page_link(103); ?>">Working Partners</a></li>
         </ul>
      </li>
      <li class=''>
         <a class='click_menu_two' href='#Program'>
            Programme
            <div ></div>
         </a>
         <ul class='show_menu_two'>
         <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'programs',
                'orderby' => array(
                    'order' => 'DESC',
                    'meta_key' => 'bar',
                ),
                'category_name' => ' programs',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile;
           wp_reset_postdata(); ?> 
         </ul>
      </li>
      <li class=''>
         <a class='click_menu_four' href='#Foundations'>
            Media Centre
            <div ></div>
         </a>
         <ul class='show_menu_four'>
            <li><a href="<?php echo get_page_link(362); ?>">News</a></li>
            <li><a href="<?php echo get_page_link(784); ?>">Press Release</a></li>
            <li><a href="<?php echo get_page_link(858); ?>">Fact Sheets</a></li>
            <li><a href="<?php echo get_page_link(863); ?>">Announcements</a></li>
         </ul>
      </li>
      <li class=''>
         <a class='click_menu_five' href='#Foundations'>
            Resources
            <div ></div>
         </a>
         <ul class='show_menu_five'>
            <li><a href="<?php the_field('link_one',775); ?>" target="_blank">CWIN Nepal Videos</a></li>
            <li><a href="<?php the_field('link_one',778); ?>" target="_blank">CWIN Balsarokar (Youtube Channel)</a></li>
            <li><a href="<?php echo get_page_link(379); ?>">Photo Gallery </a></li>
            <li><a href="<?php echo get_page_link(284); ?>">CWIN Publications</a></li>
         </ul>
      </li>
      
      <li><a href="<?php echo get_page_link(364); ?>"> Policies</a></li>
      <li><a href="<?php echo get_page_link(156); ?>"> Contact</a></li>
      
      <li><a href="<?php echo get_page_link(843); ?>"> Events</a></li>
    
   </ul>
</div>
</body>
</html>