   <!-- seccion proucts -->
   <section id="categories" class="category-show container">
     <div class="row">
       <?php $wcatTerm = get_terms('product_tag', array('hide_empty' => 0)); 
       foreach($wcatTerm as $wcatTer) : 
         ?>
         <div class="col-md-12 col-lg-6 col-xs-12 animated wow fadeInUp " data-wow-duration="1s" data-wow-delay=".2s">
           <div class=" category-content">
            <div>
              <h3><?php echo $wcatTer->name ?></h3>
            </div>
            <div class="category">
              <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="row">
                   <?php $args = array( 'product_tag' => $wcatTer->name, 'posts_per_page' => 4); ?>
                   <?php $loop = new WP_Query( $args ); ?>
                   <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
                    <div class="col-md-6 col-xs-12">
                      <div class="body">
                        <div class="content-show">
                          <?php the_post_thumbnail('thumbnail'); ?>
                          <div class="text">
                            <span><?php the_title(); ?></span>
                            <p><?php echo excerpt('5'); ?></p>
                            <div class="buy">
                              <p><?php echo $product->get_price_html(); ?></p>
                              <a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>"> <img class="icono-add" src="<?php echo get_template_directory_uri();?>/assets/img/add.png"
                                alt="" /></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-xs-12">                
                  <div class="row">
                    <?php $args = array( 'product_tag' => $wcatTer->name, 'posts_per_page' => 4, 'offset' => 4 ); ?>
                    <?php $loop = new WP_Query( $args ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
                      <div class="col-md-6 col-xs-12">
                        <div class="body">
                          <div class="content-show">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <div class="text">
                              <span><?php the_title(); ?></span>
                              <p><?php echo excerpt('5'); ?></p>
                              <div class="buy">
                                <p><?php echo $product->get_price_html(); ?></p>
                                <a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>"> <img class="icono-add" src="<?php echo get_template_directory_uri();?>/assets/img/add.png"
                                  alt="" /></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
        endforeach; 
        ?>
      </div>
    </section>
