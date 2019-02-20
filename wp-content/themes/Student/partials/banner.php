 <section id="home" class="banner  ">
  <div class=" slideshow">
    <div class="slider">
     <?php $args = array(
       'post_type'      => 'product',
       'posts_per_page' => 5

     );
     $ofertas = new WP_Query($args); ?>
     <?php if ($ofertas->have_posts()) : while( $ofertas->have_posts() ) : $ofertas->the_post(); ?>

      <?php if (get_field('popular_product')==true):?>
        <?php $post_thumbnail_id = get_post_thumbnail_id();
        $url = wp_get_attachment_url( $post_thumbnail_id);

        ?>

        <div id="banner-img">
          <div class="item">
            <div class="mask"></div>
            <div class="img" style="background-image:url(<?php the_field('image_product'); ?>)">

              
              <div class="text">
                <h1 class="animated wow fadeInUp"><?php the_field( 'name' ); ?></h1>
                <div class="btn">
                  <a class="slide button" href="<?php the_permalink(); ?>"> Add list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; endif; wp_reset_query(); ?>
  </div>
</section>