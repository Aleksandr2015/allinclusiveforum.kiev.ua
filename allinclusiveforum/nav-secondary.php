<div class="container">


     <nav class="navbar navbar-default nav_secondary" role="navigation">
<!--      <div class="container">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
            </a>          
        </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'secondary',
                    'theme_location'    => 'secondary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-2',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
            
            <ul class="nav navbar-nav navbar-right nav_secondary_social_icons">
		        <li><a href="#"><i class="fa fa-vk" title="вКонтакте"></i></a></li>
		        <li><a href="#"><i class="fa fa-facebook" title="Фейсбук"></i></a></li>
<!--		        <li><a href="#"><i class="fa fa-camera-retro" title="Одноклассники"></i></a></li>-->
		        <li><a href="#"><i class="fa fa-twitter" title="Твиттер"></i></a></li>
		    </ul>
<!--        </div>-->
    </nav>


</div>