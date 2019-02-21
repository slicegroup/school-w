<?php get_header(); ?>

<section id="show" class="container">
  <div class="school-card">
    <h2>Online school lists</h2>
    <div class="row">
      <!-- sensual card -->
      
      <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
      foreach($wcatTerms as $wcatTerm) : 
       ?>


       <div class="col-md-6 col-xs-12 col-lg-3 animated wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
        <div class="body">
          <div class="img">
           <?php $thumbnail_id = get_woocommerce_term_meta($wcatTerm->term_id, 'thumbnail_id', true);

           $images = wp_get_attachment_image_src($thumbnail_id, 'medium');

           ?>

           <img src="<?php echo $images[0]; ?>" alt="<?php echo $wcatTerm->name; ?>" />
         </div>
         <div class="content">
          <h3><?php echo $wcatTerm->name; ?></h3>
          <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><p>See all courses</p></a>

        </div>
      </div>
    </div>
    <?php 
  endforeach; 
  ?>
  <!-- end -->
</div>
</div>
</section>




<?php get_footer(); ?>
