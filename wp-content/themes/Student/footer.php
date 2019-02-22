<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">List form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
   <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
</div>
<div class="modal-footer">
  <a class="slide button"  data-toggle="modal" data-target="#exampleModalCenter">send</a>
</div>
</div>
</div>
</div>
<!-- footer -->
<footer id="footer" class="container-fluid">
    <div class="footer">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/map.png" alt="">
                    5341 NW 79 AV, Doral, Fl.33166
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/sobre-cerrado.png" alt="">

                    sales@studentrus.com
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/receptor-de-telefono.png" alt="">
                    (305) 597.71.41
                </div>
            </div>
        </div>
        <div class="social">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="copy">
            <span>Copyright © Student R US2019 | Powered by Slice Group 
            <div class="logo-slice">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Logo_blanco.png" alt="">
            </div>
            </span>
        </div>
    </div>
</footer>

<!-- footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
crossorigin="anonymous"></script>
<script src="https://js.honeybadger.io/v0.4/honeybadger.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script>
    new WOW().init();

</script>
<?php wp_footer(); ?>
</body>

</html>
