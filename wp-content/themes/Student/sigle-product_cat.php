<?php get_header(); ?>

<?php if ( is_product_category() ){
	global $wp_query;

// get the query object
	$cat = $wp_query->get_queried_object();

// get the thumbnail id using the queried category term_id
	$category_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
// get the title id using the queried category term_id
	$title = get_woocommerce_term_meta( $cat->term_id, 'title', true );
// get the image URL
	$image = wp_get_attachment_url( $category_id );

}?>

<section>

	<div class="plan" style="background:url('<?php echo $image; ?>');
	">
	<!-- <div class="mask-plan"> -->
		<div class="container">
			<div class="title-plans">
				<i class="fas fa-map-marker-alt"></i>
				<h1>
					<?php echo $cat->name; ?>
				</h1>
				<div class="info-category weather">
					<?php 
					$product_categories = get_terms( 'product_cat');
					$slug_current = get_query_var( 'product_cat', $args );
					?>
					<?php foreach ( $product_categories as $product_category ):?>
						<?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);?>
						<?php if ($slug_current == $product_category->slug): ?>
							<ul>
								<li> <i class="fas fa-star"></i><?php echo the_field('experience_destinations',$product_category);?></li>
								<li><i class="fas fa-cloud-sun"></i><?php echo the_field('wheather_destinations',$product_category);?></li>
								<li><i class="fas fa-thermometer-three-quarters"></i><?php echo the_field('temperature_destinations',$product_category);?></li>
							</ul>
							<?php break;endif; ?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>







<!-- --------------------------------------------------------------------- -->
<section class="container-fluid contenedor">
	<div class="plan-list ">
		<div class="row ">
			<div class="col-md-4 d-md-inline-block d-none none-category">
				<!--------------------------------- important-------------------------->

				<!--------------------------------- important-------------------------->
				<?php  $args = array(

					'orderby'    => 'slug',
					'order'      => 'ASC'
				);
				$product_categories = get_terms( 'product_cat', $args );
				$count = count($product_categories);


				if ( $count > 0 ){
					foreach ( $product_categories as $product_category ) {
						?>


						<a href="<?php echo get_term_link( $product_category ) ?>" class="filter-btn" data-filter="<?php echo '.'.$product_category->term_id; ?>">
							<div class="grid-plan">
								<figure class="effect-oscar">
									<?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

									$images = wp_get_attachment_image_src($thumbnail_id,'medium');
									?>
									<img src="<?php echo $images[0]; ?>"
									alt="<?php echo $product_category->name; ?>" />
									<figcaption>
										<h2> <span><?php echo $product_category->name; ?></span></h2>
									</figcaption>
								</figure>
							</div>
						</a>

						<?php
					}}
					?>
				</div>





				<div class="col-md-8 col-lg-7">
					<div class="row">

						<?php while( have_posts() ) : the_post(); ?>
							<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
							$url = wp_get_attachment_image_src($post_thumbnail_id,'large'); ?>
							<a href="<?php the_permalink(); ?>">
								<div class="col-md-6 col-lg-7 col-xs-12 col-xl-6">
									<!-- Card -->
									<div id="make-3D-space">
										<div class="product-card">
											<div id="product-front">
												<div class="shadow"></div>


												<div class="card-shadow" style=" background-image: url(<?php echo $url[0];?>);"> </div>
												<div class="image_overlay"></div>
												<!-- <div id="view_details">View details</div> -->
												<div class="stats">
													<div class="stats-container">
														<!-- <span class="product_price">$39</span> -->
														<span class="product_name"><?php the_title();?></span>
														<ul class="icons-card-plan">
															<li><i class="far fa-calendar-alt"></i></li>
															<li><i class="fas fa-plane-departure"></i></li>
															<li><i class="fas fa-hotel"></i></li>

														</ul>
														<p><?php the_field('description_product_category'); ?></p>


														<div class="product-options">
															<strong>From <?php echo $product->get_price_html(); ?></strong>
															<!-- <span>From : $40</span> -->
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>
							</a>
						<?php endwhile; ?>

					</div>

					<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->

					<!-- .end Card -->

				</div>
			</div>
		</div>
	</section>
	<!-- --------------------------------------------------------------------- -->
	<?php get_footer() ?>

	<style> .title-plans {
		padding: 2% 0;
		color: #fff;
		font-weight: 600;
		z-index: 2;
		/* width: 60%; */
	}
	.title-plans h1 {
		margin-bottom: 10%;
		color: #fff;
		font-weight: 800;
		text-transform: uppercase;
		text-shadow: 0px 4px 7px #0808087d;
		font-size: 4rem;
		margin-left: 60px;
	}
	.fa-star:before {
		content: "\f005";
		font-size: 1.1rem;
	}
	.fa-cloud-sun:before {
		content: "\f6c4";
		font-size: 1.3rem;
		margin: 0px -3px;
	}
	.fa-thermometer-three-quarters:before {
		content: "\f2c8";
		font-size: 1.5rem;
		margin: 0px 5px;
	}
	.info-category i{
		margin: 0px 14px 0px;
	}
	.info-category li {
		display: list-item;
	}
	.weather {
		width: 23.5%;
	}
	.plan {
		background-position: center!important;
	}
	.icons-card-plan .fa-calendar-alt:before {
		margin: 0!important;
		font-size: 1.3rem!important;
	}
	.product-options span {
		display: inline-flex;
		font-weight: 600;
		color: #5c9c1e;
		font-size: 1.3rem;
	}
</style>
