<nav id="main-navbar" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<a class="app-menu-trigger" href="#"><i class="fa fa-bars"></i></a>
      
      <a class="navbar-logo hidden" href="<?php echo esc_url( home_url( '/' ) ); ?>">Park Slope Food Coop</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<?php
					$args = array(
						'theme_location'  => 'main',
						'menu'            => 'main',
						'menu_class'      => '',
						'menu_id'         => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'echo'            => true,
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => ''
					);
					//wp_nav_menu( $args );
				?>
        <li class="log-in"><a href="#">Log in</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>