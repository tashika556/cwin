<!--Template Name: Publication Page-->
<?php get_header(); ?>
<section id="banner" style="background-image: url();" class="position-relative">
   <div class="sub_banner">
      <h2><?php the_title(); ?></h2>
   </div>
</section>
<section id="publication" class="padding  bg_button_icon position-relative">
   <div class="container">
      <div class="row">
      <?php
      $parent_category_id = 11; // Replace with the ID of your parent category.
$subcategories = get_categories(array(
    'child_of' => $parent_category_id,
    'hide_empty' => 0,
));

if (!empty($subcategories)) {
    foreach ($subcategories as $subcategory) { ?>

                           <div class="col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                     <a class="link_img" href="<?php echo get_permalink(286) . '?category_id=' . $subcategory->term_id; ?>">
                        </a><article class="card mb-md-4 mb-4"><a class="link_img" href="<?php echo get_permalink(286) . '?category_id=' . $subcategory->term_id; ?>">
                           </a><figure class="card-img pb-0 mb-0"><a class="link_img" href="<?php echo get_permalink(286) . '?category_id=' . $subcategory->term_id; ?>">
                   <?php        if (function_exists('z_taxonomy_image_url')) {
            $subcategory_image_url = z_taxonomy_image_url($subcategory->term_id);
            if (!empty($subcategory_image_url)) { ?>
                              </a><a href="<?php echo get_permalink(286) . '?category_id=' . $subcategory->term_id; ?>"> <img src="<?php echo $subcategory_image_url ?>"></a>
                           </figure>
                           <div class="card-body text-center">
                           <a class="link_img" href="<?php echo get_permalink(286) . '?category_id=' . $subcategory->term_id; ?>">
<h2 class="card-title d-flex align-items-center justify-content-center"><?php echo $subcategory->name ?> </h2></a>
                           </div>
                        </article>
                     
                  </div>
<?php     }
                   }
                  }
}
?>

               </div>
   </div>
</section>

<a class="" id="button"></a>
<?php get_footer(); ?>


