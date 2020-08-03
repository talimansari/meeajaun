<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" class="header-section">
	<div class="container">
		<div class="header-wrapper">
<div id="branding">
<div id="site-title" class=" header-logo  ">
<a href="<?php echo site_url();?>"><img src="http://localhost/Meeajaun-H/wp-content/uploads/2020/07/meeajaun-logo.png"></a>
</div>

</div>
<nav id="menu" class="navbar navbar-wrapper navbar-expand-lg">
 <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <a class="menu-bar" href="#">
                    <span class="bars bar1"></span>
                    <span class="bars bar2"></span>
                    <span class="bars bar3"></span>
                  </a>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
          </div>
          <div class="sign-in">
          <a href="#">Sign-in</a>
        </div>
</nav>
</div>
</div>
</header>
<div id="container">