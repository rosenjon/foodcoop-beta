<?php
/* Template Name: Documentation */
get_header();?>

  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">
      
      <?php //page_hed(); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="d_pages_by_template">
            <h3>Templates and Layouts</h3>
            <?php pages_by_template(); ?>            
          </div>
        </div>
      </div>

    </div>
  </section>
  
<?php get_footer(); ?>