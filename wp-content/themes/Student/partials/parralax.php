<section>
  <div class="upload">
    <div class="mask"></div>
    <div class="parallax" style="background-image:url(https://images.pexels.com/photos/207665/pexels-photo-207665.jpeg?auto=compress&cs=tinysrgb&h=650&w=940)">
      <div class="center">
        <h1 class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Upload your list!</h1>
        <p>
          Upload your list and we will respond in the next few days
        </p>
        <p>
          or if you prefer you can search for the products directly on our
          page.
        </p>
        <a class="slide button"  data-toggle="modal" data-target="#exampleModalCenter"> Add list</a>
      </div>
    </div>
  </div>
</section>

<!-- Button trigger modal -->

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