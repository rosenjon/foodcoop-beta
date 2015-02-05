<?php
/* Template Name: Documentation */
get_header();?>

  <section id="t_<?php page_template_id(); ?>" class="main">
    <div class="container">
      
      <?php //page_hed(); ?>

      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <div class="d_pages_by d_pages_by_nav">
            <div>
              <h3>Site Navigation</h3>
              <p>A working version of the navigation</p>
            </div>
            <?php
            $args = array(
              'theme_location'  => 'docs',
              'menu'            => 'app-menu',
              'container'       => '',
              'container_class' => 'ii',
              'container_id'    => '',
              'menu_class'      => 'd_nav',
              'menu_id'         => '',
              'echo'            => true,
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            );
            wp_nav_menu( $args );
          ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1">
          <div class="d_pages_by d_pages_by_template">
            <div>
              <h3>Templates and Layouts</h3>
              <p>Pages organized by template</p>
            </div>
            <?php pages_by_template(); ?>            
          </div>
        </div>
      </div>

    </div>
  </section>
  
<?php get_footer(); ?>