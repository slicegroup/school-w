<!-- <h2>page mi cuenta</h2> -->
<?php get_header(); ?>

<?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
foreach($wcatTerms as $wcatTerm) : 
	?>
	<section id="<?php echo $wcatTerm->slug; ?>" class="container">
		<div class="titulo-curso">
			<div>
				<?php $thumbnail_id = get_woocommerce_term_meta($wcatTerm->term_id, 'thumbnail_id', true);

				$images = wp_get_attachment_image_src($thumbnail_id, 'medium');

				?>
				<img src="<?php echo $images[0]; ?>" alt="<?php echo $wcatTerm->name; ?>">
			</div>
			<div>
				<h2><?php echo $wcatTerm->name; ?></h2>
				<span><?php echo $wcatTerm->description; ?></span>
			</div>

		</div>
		<div class="row">

			<?php
			$wsubargs = array(
				'hierarchical' => 1,
				'show_option_none' => '',
				'hide_empty' => 1,
				'parent' => $wcatTerm->term_id,
				'taxonomy' => 'product_cat',
				'posts_per_page' => 2
			);
			$wsubcats = get_categories($wsubargs);
			foreach ($wsubcats as $wsc):
				?>
				<div class="col-md-6">
					<div class="card-lists">
						<div class="list-body container">


							<h3><?php echo $wsc->name; ?></h3>


							<div class="list-content">
								<ul class="list-group list-group-flush">
									
									<?php $subcat = get_terms('product_cat', array('hide_empty' => 0, 'child' =>0)); 
									foreach($subcat as $sub) : 
										?>
										<?php
										$wsubarg = array(
											'hierarchical' => 1,
											'show_option_none' => '',
											'hide_empty' => 1,
											'parent' => $sub->term_id,
											'taxonomy' => 'product_cat',
											'posts_per_page' => 2
										);
										$wsubcat = get_categories($wsubarg);
										foreach ($wsubcat as $wscb):
											?>
											<li class="list-group-item  d-flex justify-content-between align-items-center"><?php echo $wscb->name;?>
											<a href="<?php echo get_term_link( $sub->slug, $wscb->taxonomy );?>" class="slide button"> See list</a>
										</li>
										<?php
									endforeach;
									?>
									<?php
								endforeach;
								?>  
							</ul>
						</div>

					</div>
				</div>
			</div>

			<?php
		endforeach;
		?>
	</div>
</section>
<?php 
endforeach; 
?>
<!-- end -->



<?php get_footer();

