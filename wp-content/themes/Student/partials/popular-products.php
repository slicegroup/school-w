 <section id="product" class="product container">
  <div class="wrapper">
    <h2 class="pro_title">Popular products</h2>
    <div class="product-popular">
      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
      <?php $loop = new WP_Query( $args ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
        <?php if (get_field('popular_product')==true):?>
          <div class="card-product animated wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
            <a href="<?php the_permalink() ?>">
              <div class="
              img-product">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="text-product">
              <span><?php the_title(); ?></span>
              <p><?php echo excerpt('5'); ?></p>
              <div class="wrapper-buy">
              </a>
              <div class="container">
                <div class="top"></div>
                <div class="bottom">
                  <div class="left">
                    <div class="details">
                      <p> <?php echo $product->get_price_html(); ?></p>
                      <a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>"> <div class="buy">
                        <img class="icono-add" src="<?php echo get_template_directory_uri();?>/assets/img/add.png" alt="">
                      </div></a>
                    </div>

                  </div>
                  <div class="right">
                    <div class="done">
                      <img src="https://img.icons8.com/color/48/000000/checkmark.png" width="25px">
                    </div>
                    <div class="details-done">
                      <p>added to your list
                      </p>
                    </div>
                    <!-- <div class="remove"><img src="https://img.icons8.com/color/48/000000/delete-sign.png" width="25px"></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>

  </div>
</div>
</section>