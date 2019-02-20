<?php
get_header();
?>


<section id="product" class="product container">
	<div class="wrapper">
		<div class="product-popular">
			<?php if (have_posts() ): while ( have_posts() ) : the_post(); global $product; ?> 
				<div class="card-product animated wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
					<a href="<?php the_permalink() ?>">
						<div class="
						img-product">
						<?php if ( get_field( 'image') ) { ?>
							<img src="<?php the_field( 'image' ); ?>" />
						<?php } ?>
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
		<?php endwhile; 
	else:

		?>
		<div>
			<h1>producto no encontrado </h1>
			<a href="<?php echo bloginfo('url');?>"><p>Volver a la pagina principal</p></a>
		</div>

	<?php endif; ?>

</div>
</div>
</section>

<?php
get_footer();
?>