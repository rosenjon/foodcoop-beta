<section id="site-footer" class="strip">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h3 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo THEME . '/img/psfc_logo_white.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-responsive logo" /></a></h3>
        <h4>Good Food at Low Prices for Working Members through Cooperation since 1973</h4>
        <?php $curYear = date('Y'); ?>
        <p class="datespan">1973 — <?php echo $curYear; ?></p>
      </div>

      <div class="col-xs-12 col-sm-2">
        <h5>About the Coop</h5>
        <ul>
          <li>Item</li>
          <li>Longer Item</li>
          <li>Even Longer Item</li>
          <li>An item that is seven words long</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-2">
        <h5>Produce &amp; Food</h5>
        <ul>
          <li>Item</li>
          <li>Longer Item</li>
          <li>Even Longer Item</li>
          <li>An item that is seven words long</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-2">
        <h5>Members</h5>
        <ul>
          <li>Item</li>
          <li>Longer Item</li>
          <li>Even Longer Item</li>
          <li>An item that is seven words long</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-2">
        <h5>Community</h5>
        <ul>
          <li>Item</li>
          <li>Longer Item</li>
          <li>Even Longer Item</li>
          <li>An item that is seven words long</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<?php
            $args = array(
              'theme_location'  => 'footer-menu',
              'menu'            => '',
              'container'       => 'div',
              'container_class' => 'col-xs-12',
              'container_id'    => '',
              'menu_class'      => '',
              'menu_id'         => '',
              'echo'            => true,
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            );
            //wp_nav_menu( $args );
          ?>