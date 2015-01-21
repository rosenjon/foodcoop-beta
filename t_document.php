<?php
/* 
Template Name: Document 
Description: 
*/
get_header();?>

  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <?php loop(); ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="wbox" wbox-label="Block" wbox-type="block"></div>
          <div class="wbox" wbox-label="Map" wbox-type="block" wbox-size="small" wbox-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."></div>
          <div class="wbox" wbox-label="Strip" wbox-type="strip"></div>
        </div>
      </div>
      <div class="row hidden">
        <div class="col-xs-12">
          

          <div class="wbox" wbox-label="Text" wbox-type="block"></div>
          <div class="wbox" wbox-label="Map" wbox-type="block" wbox-size="small" wbox-desc="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."></div>
        </div>
      </div>
      
    </div>
  </section>
  
<?php get_footer(); ?>