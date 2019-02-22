 <section id="home" class="banner  ">
  <div class=" slideshow">
    <div class="slider">
      <?php $argsBanner = array( 'post_type' => 'carrusel', 
        'showposts' => 3,  );  

        $Banners = new WP_Query($argsBanner); ?>   
        <?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
          <?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
          $url = wp_get_attachment_url( $post_thumbnail_id);?>

          <div id="banner-img">
            <div class="item">
              <div class="mask"></div>
              <div class="img" style="background-image:url('<?php echo $url; ?>')">


                <div class="text">
                  <h1 class="animated wow fadeInUp"><?php the_title(); ?></h1>
                  <div class="btn">
                    <a class="slide button" href="<?php echo bloginfo('url');?>/shop"> Add list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; endif; ?>
      </div>

    </section>