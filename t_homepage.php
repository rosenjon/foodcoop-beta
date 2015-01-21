<?php
/* Template Name: Homepage */
get_header();?>

  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="wbox" wbox-label="Large Photo" wbox-type="block" wbox-size="small"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Promo" wbox-type="promo"></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Promo" wbox-type="promo"></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Promo" wbox-type="promo"></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
      </div>

    </div>
  </section>
  

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#app-modal">
    Launch demo modal
  </button>


<?php get_footer(); ?>