<!--Template Name: Three Decades Page -->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
      <div class="sub_banner">
        <h2><?php the_title(); ?></h2>
      </div>
    </section>

    <section id="milestone" class="timeline padding bg_gray">
      <ul>
<?php if(have_rows('details')): while(have_rows('details')) : the_row(); ?>
        <li>
          <div>
            <time><?php the_sub_field('date'); ?></time>

            <div class="timeline_new-wrapp">
              <div class="">
                <h5>
              <?php the_sub_field('title'); ?>
                </h5>
              </div>

              <p><a class="toggletrigger read_more_team">Read more</a></p>

              <div class="togglewrap">
              <?php the_sub_field('summary'); ?>
              </div>
            </div>
          </div>
        </li>
      <?php endwhile;
      endif; ?> 
      </ul>
    </section>
    <a class="" id="button"></a>
    <?php get_footer(); ?>