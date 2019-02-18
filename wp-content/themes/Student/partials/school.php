<section id="school" class="container">
  <div class="school-card">
    <h2>Online school lists</h2>
    <div class="row">
      <!-- sensual card -->
      <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );

      $product_categories =  get_terms(['taxonomy' => 'product_cat','hide_empty' => false, 'parent' => 0]);
      $count = count($product_categories);
      $product_chield =  get_terms(['taxonomy' => 'product_cat','hide_empty' => true, 'chield' => 0]);
      $countt = count($product_chield);

      if ($count > 0) {
        foreach ($product_categories as $product_category) {
          ?>
          <div class="col-md-6 col-xs-12 col-lg-3 animated wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
            <div class="body">
              <div class="img">
               <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

               $images = wp_get_attachment_image_src($thumbnail_id, 'medium');

               ?>

               <img src="<?php echo $images[0]; ?>" alt="<?php echo $product_category->name; ?>" />
             </div>
             <div class="content">
              <h3><?php echo $product_category->name; ?></h3>

              <?php 
              foreach ($product_chield as $product_chields) {
                ?>
                <p><a href="#"><?php echo $product_chields->name; ?></a></p>
                <?php

                
              }
              ?>
              
              <a href="<?php echo get_term_link( $product_category ) ?>"><p>See all courses</p></a>

            </div>
          </div>
        </div>
        <?php

      }
    }
    ?>
    <!-- end -->
  </div>
</div>
</section>