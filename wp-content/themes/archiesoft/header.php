<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title><?php bloginfo('name');?> <?php wp_title(); ?> </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Montserrat:wght@100;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600&family=Redressed&family=Roboto+Condensed:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,500&display=swap"
         rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Laila:wght@400;500;600;700&family=Montserrat:wght@100;300;400;500&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600&family=Redressed&family=Roboto+Condensed:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.minn.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick-theme.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
   </head>
   <?php wp_head(); ?>
   <body>
      <header class="animate__bounce">
         <div class="container-fluid">
            <nav class="header section-header top-header-bg header-sticky d-flex justify-content-between">
               <div class="logo ">
                  <a href="<?php echo get_page_link(10); ?>" class=""> <img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="img-fluid" alt="logo"></a>
               </div>
               <ul class="menu_list d-flex align-items-center">
                  <li>
                     <a class="nav_link" href="#">About</a>
                     <ul class="sub_menu">
                        <li><a href="<?php echo get_page_link(106); ?>">Introduction</a></li>
                        <li><a href="<?php echo get_page_link(168); ?>">History Behind CWIN </a></li>
                        <li><a href="<?php echo get_page_link(183); ?>">CWIN Profile - 2021</a></li>
                        <li>
                           <a href="<?php echo get_page_link(159); ?>">Three Decades of Child Rights Movement in Nepal</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(128); ?>">Organizational Structure</a>
                        </li>
                        <li>
                           <a href="<?php echo get_page_link(103); ?>">Working Partners</a>
                        </li>
                        <li><a href="<?php echo get_page_link(364); ?>"> CWIN Policies</a></li>
                     </ul>
                  </li>
                  <li>
                     <a class="nav_link" href="#">Programs</a>
                     <ul class="sub_menu">
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
                  <li>
                     <a class="nav_link" href="#">Media Centre</a>
                     <ul class="sub_menu">
                        <li><a href="<?php echo get_page_link(362); ?>">News</a></li>
                        <li><a href="<?php echo get_page_link(784); ?>">Press Release</a></li>
                        <li><a href="<?php echo get_page_link(858); ?>">Fact Sheets</a></li>
                        <li><a href="<?php echo get_page_link(863); ?>">Announcements</a></li>
                        <li><a href="<?php echo get_page_link(895); ?>">Media and Communications</a></li>
                     </ul>
                  </li>
                  <li>
                     <a class="nav_link" href="#">Resources</a>
                     <ul class="sub_menu">
                        <li><a href="<?php the_field('link_one',775); ?>" target="_blank">CWIN Nepal Videos</a></li>
                        <li><a href="<?php the_field('link_one',778); ?>" target="_blank">CWIN Balsarokar</a></li>
                        <li><a href="<?php echo get_page_link(379); ?>">Photo Gallery </a></li>
                        <li><a href="<?php echo get_page_link(284); ?>">CWIN Publications</a></li>
                     </ul>
                  </li>
                 
                  <li><a class="nav_link" href="<?php the_field('link_one',854); ?>" target="_blank">35 Years Milestones</a></li>
                  <li><a class="nav_link" href="<?php the_field('link_one',772); ?>" target="_blank">Program Reports</a></li>
                  <li><a class="nav_link" href="<?php echo get_page_link(156); ?>"> Contact</a></li>
                  <li class="d-none">
                     <div id="search-menu">
                        <div class="wrapper">
                           <form id="form" action="#" method=""><input id="popup-search" type="text" name="u" placeholder="Search for a user" /><button id="popup-search-button" type="submit" name="search"><i class="ion-ios-search-strong"></i></button></form>
                        </div>
                     </div>
                     <i class="fa fa-search" id="search-icon"></i>
                  </li>
                  <li class="menu_toggle">
                     <span class="font-weight-bold" style="font-size:30px;cursor:pointer;color: #028738;" onclick="openNav()">&#9776;</span>
                     <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                           <a class="mb-4 d-block" href="<?php echo get_page_link(284); ?>">CWIN Publications</a>
                           <a class="mb-4 d-block" href="<?php the_field('link_one',775); ?>" target="_blank">CWIN Nepal Videos</a>
                           <a class="mb-4 d-block" href="<?php the_field('link_one',778); ?>" target="_blank">CWIN Balsarokar (Youtube Channel)</a>
                           <a class="mb-4 d-block" href="<?php echo get_page_link(843); ?>">Events</a>
                           <a class="mb-4 d-block" href="<?php echo get_page_link(379); ?>">Photo Gallery </a>
                           <a class="mb-4 d-block" href="<?php echo get_page_link(156); ?>">Contact</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
          <!-- mobile menu start  -->
 
    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav_two()">&#9776; </span>
    </div>
    <!-- mobile menu end  -->