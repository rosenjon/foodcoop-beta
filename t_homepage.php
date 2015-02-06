<?php
/* Template Name: Homepage */
get_header();?>

  <section id="head">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo THEME . '/img/psfc_logo.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-responsive logo" /></a></h1>
          <h2>Good Food at Low Prices for Working Members through Cooperation since 1973</h2>
        </div>
      </div>
    </div>
  </section>


  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="wbox" wbox-label="Hours and Location" wbox-type="block" wbox-size="small"></div>
          <div class="wbox" wbox-label="Coop News" wbox-type="block" wbox-size="small"></div>
        </div>
      </div>

      <div class="row">
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
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#app-modal">
    Launch demo modal
  </button>


<?php get_footer(); ?>