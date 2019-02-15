<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 













// Add this to your theme's functions.php
function jh_add_script_to_footer(){
  if( ! is_admin() ) { ?>
  <script>

jQuery(document).ready(function($){
$(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
  $input = $(this).prev('input.qty');
  var val = parseInt($input.val());
  var step = $input.attr('step');
  step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
  $input.val( val + step ).change();
});
$(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
  function(e) {
  $input = $(this).next('input.qty');
  var val = parseInt($input.val());
  var step = $input.attr('step');
  step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
  if (val > 0) {
      $input.val( val - step ).change();
  }
});
});
</script>
<?php
  }
}
add_action( 'wp_footer', 'jh_add_script_to_footer' );