<!-- Template Name: Fact Sheets Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="reports" class="padding publication_page">
        <div class="container">
            <div class="row">

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'publications',
                    'orderby' => 'date',
                    'category_name' => 'fact-sheets',
                    'posts_per_page' => 100,
                    'paged' => $paged
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                    ?>

                                    <div class="col-lg-4 columb_margin wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="report_box_main position-relative">
                        <a href="<?php the_field('file_upload'); ?>" download>
                                <figure class="snip1220">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </figure>
                                <div class="report_section text-center">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <div class="download_publication">
                                <svg id="donwloader" class="mt-0" width="60" height="60" viewBox="0 0 40 40">
                        <path id="arrow" d="m20 4 v14 m-5 -5 l5 5 5 -5"></path>
                        <path id="base" d="m10 28 v4 h 20 v-4"></path>
                     </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php endwhile;
                wp_reset_postdata(); ?>
                
            </div>
        </div>
    </section>
<a class="" id="button"></a>
<?php get_footer(); ?>