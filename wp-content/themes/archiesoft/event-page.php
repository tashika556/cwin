<!-- Template Name: Events Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
       <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="news_page" class="padding  bg_button_icon position-relative">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-12">
            <div class="row">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'events',
                'orderby' => 'date',
                'category_name' => 'events',
                'posts_per_page' => 100,
                'paged' => $paged
            ); 
            $custom_query= new WP_Query($args);
            while($custom_query->have_posts()):
                $custom_query->the_post();
                $postid = get_the_ID();
            ?>
               

                                 <div class="col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                     <div class="blog_men_block">
                        <div class="blog_img">
                           <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                        </div>
                        <div class="blog_text_block bg_gary_new text-center">
                           <h3>
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </h3>
                        </div>
                        <div class="date_block text-center">
                           <h2><strong><?php echo get_the_date('d'); ?></strong><small><?php echo get_the_date('M'); ?></small></h2>
                        </div>
                     </div>
                  </div>
                  
                  <?php endwhile;
           wp_reset_postdata(); ?> 

            </div>
         </div>
         <div class="col-lg-4 col-md-8 col-12 mx-auto wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                           <div class="news_right_block">
                  <div class="news_right_title">
                     <h2>Recent News</h2>
                  </div>
                                       <div class="news_right_two d-flex p-3">
                        <div class="news_right_date text-center">
                           <h2><strong>04</strong><small>Sep</small></h2>
                        </div>
                        <div class="news_right_title_sub pl-3">
                           <a href="https://cwin.org.np/news/orientation-for-adolescents-on-mental-wellbeing">
                              <h3 class=" font-weight-bold ">Orientation for Adolescents on Mental Wellbeing&nbsp;</h3>
                           </a>
                        </div>
                     </div>
                                 </div>
                                    <div class="news_right_block mt-4">
               <div class="news_right_title">
                  <h2>Press Release</h2>
               </div>
                                 <div class="news_right_two d-flex p-3">
                     <div class="news_right_date text-center">
                        <h2><strong>20</strong><small>Feb</small></h2>
                     </div>
                     <div class="news_right_title_sub pl-3">
                        <a href="https://cwin.org.np/press-release/रा.डा.-मथुराप्रसाद-श्रेष्ठलाई-हामी-युगौ-युग-सम्झिरहने-छौं">
                           <h3 class=" font-weight-bold ">प्रा.डा. मथुराप्रसाद श्रेष्ठलाई हामी युगौ युग सम्झिरहने छौं</h3>
                        </a>
                     </div>
                  </div>
                                 <div class="news_right_two d-flex p-3">
                     <div class="news_right_date text-center">
                        <h2><strong>13</strong><small>Nov</small></h2>
                     </div>
                     <div class="news_right_title_sub pl-3">
                        <a href="https://cwin.org.np/press-release/विश्व-बाल-दिवस-२०२१-र-सिविन-नेपालको-३४औँ-वार्षिकोत्सव-सपन्न">
                           <h3 class=" font-weight-bold ">विश्व बाल दिवस २०२१ र सिविन नेपालको ३४औ वार्षिकोत्सव</h3>
                        </a>
                     </div>
                  </div>
                                 <div class="news_right_two d-flex p-3">
                     <div class="news_right_date text-center">
                        <h2><strong>17</strong><small>Jan</small></h2>
                     </div>
                     <div class="news_right_title_sub pl-3">
                        <a href="https://cwin.org.np/press-release/a-milestone-for-child-and-adolescent-mental-health-in-nepal!">
                           <h3 class=" font-weight-bold ">A milestone for Child and Adolescent Mental Health in Nepal!</h3>
                        </a>
                     </div>
                  </div>
                           </div>
                     </div>
      </div>
   </div>
</section>
<a class="" id="button"></a>
<?php get_footer(); ?>