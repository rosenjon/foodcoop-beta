<?php
/* Template Name: Homepage */
get_header();?>


  <?php include(INC . 'head.php'); ?>
  <?php include(INC . 'mailing-list-signup.php'); ?>
  <?php include(INC . 'hours-location.php'); ?>




  <section id="alert" class="alert alert-danger">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p><strong>Alert:</strong> Lorem ipsum dolor sumit</p>
        </div>
      </div>
    </div>
  </section>


  <section id="" class="strip">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="heading">Coop News</h3>
          <h4 class="sub-heading">Sub-heading</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

    </div>
  </section>

  <section id="produce" class="strip">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="heading">Daily Produce</h3>
          <h4 class="sub-heading">Sub-heading</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="wbox" wbox-label="IMAGE" wbox-type="block"></div>
        </div>
      </div>

    </div>
  </section>

  
  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">


      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="wbox" wbox-label="Shopping" wbox-type="block"></div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="wbox" wbox-label="Members News" wbox-type="block"></div>
        </div>
      </div>
      
      <div class="row hidden">
        <div class="col-xs-12">
          <div class="wbox" wbox-label="Hours and Location" wbox-type="block" wbox-size="small"></div>
          <div class="wbox" wbox-label="Coop News" wbox-type="block" wbox-size="small"></div>
        </div>
      </div>

      <div class="row hidden">
        <div class="col-xs-6">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Promo" wbox-type="promo"></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
        <div class="col-xs-6">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Promo" wbox-type="promo"></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
      </div>

    </div>
  </section>
  

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#app-modal">
    Launch demo modal
  </button>

  <?php include(INC . 'site-footer.php'); ?>


<?php get_footer(); ?>