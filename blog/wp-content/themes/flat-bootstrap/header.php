<?php
session_start();
/**
 * Theme: Flat Bootstrap
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package flat-bootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="../style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper" style="background-color: #fff;">
<header>
    <div class="container">
      <div id="logo">
        <a href="../index.php"><img src="../assets/images/cd.png" alt="" /></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <nav class="main-nav">
           <div class="header-right">
             <div class="header-right-btns">
          <ul>
       <span style="height:80px; border:solid #000; padding:10px;">
            <li><a href="../projects.php">Investment Opportunities <!-- <span>what is fundz?</span> --></a></li>
          </span>
           <!--  <li><a href="projects.php">Explore <span>amazing ideas</span></a>
              <ul>
                <li><a href="projects.php">Projects - Sidebar</a></li>
                <li><a href="projects-2.php">Projects - Full Width</a></li>
                <li><a href="project-single.php">Projects Single</a></li>
              </ul>
            </li> -->
          
           <?php 

if(!isset($_SESSION['userid']) || $_SESSION['userid'] == '')

{

  echo '
   <li><a href="../projects.php">Explore <!-- <span>send your idea</span> --></a></li>
  <li>
                <a href="../register.php?login">Login</a>
                 </li>
              <li>
                <a href="../register.php?signup" class="btn btn-4 blue">Join</a>
              </li>
               

';
}
else{ ?>
    <li><a href="../company.php">Start A project <!-- <span>send your idea</span> --></a></li>
<li><a href="#"><img src="../<?php echo $_SESSION['img']; ?>" width="30" /> <?php echo  $_SESSION['name']; ?><b class="caret"></b></a>
              <ul>
                <li><a href="../layout.php?tabe=profile"><i class="fa fa-fw fa-user"></i>Profile</a></li>
                <li><a href="../layout.php?tabe=companies"><i class="fa fa-fw fa-building"></i>Companies</a></li>
                <li><a href="../layout.php?tabe=projects"><i class="fa fa-fw fa-lightbulb-o"></i>Projects</a></li>
                <li><a href="../layout.php?tabe=investments"><i class="fa fa-bar-chart fa-gear"></i>Investments</a></li>
                <li><a href="../layout.php?tabe=settings"><i class="fa fa-fw fa-gear"></i>Settings</a></li>
                <li><a href="../logout.php"><i class="fa fa-fw fa-power-off"></i>logout</a></li>
              </ul>
            </li>

<?php }
           ?>

               
          </ul>
        </div>
        </div>
        </nav>
       
      </div>
    </div>
  </header>
  </div>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="site-header" role="banner">

		<?php
		/**
		  * CUSTOM HEADER IMAGE DISPLAYS HERE FOR THIS THEME, BUT CHILD THEMES MAY DISPLAY
		  * IT BELOW THE NAV BAR (VIA CONTENT-HEADER.PHP)
		  */
		global $xsbf_theme_options;
		$custom_header_location = isset ( $xsbf_theme_options['custom_header_location'] ) ? $xsbf_theme_options['custom_header_location'] : 'content-header';
		if ( $custom_header_location == 'header' ) :
		?>

			<div id="site-branding" class="site-branding">
			
			<?php
			// Get custom header image and determine its size
			if ( get_header_image() ) {
			?>
				<div class="custom-header-image" style="background-image: url('<?php echo header_image() ?>'); width: <?php echo get_custom_header()->width; ?>px; height: <?php echo get_custom_header()->height ?>px;">
				<div class="container">
                <?php //if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                <div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' )?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
				</div></div>
			<?php

			// If no custom header, then just display the site title and tagline
			} else {
			?>
				<div class="container">
                <?php //if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                <div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' )?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
				</div>
			<?php
			} //endif get_header_image()
			?>
			</div><!-- .site-branding -->

		<?php			
		endif; // $custom_header_location
		?>			

		<?php
		/**
		  * ALWAYS DISPLAY THE NAV BAR
		  */
 		?>	
		<nav id="site-navigation" class="main-navigation" role="navigation">

			<h2 class="menu-toggle screen-reader-text sr-only "><?php _e( 'Primary Menu', 'flat-bootstrap' ); ?></h2>
			<div class="skip-link"><a class="screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'flat-bootstrap' ); ?></a></div>

		<?php
		// Collapsed navbar menu toggle
		global $xsbf_theme_options;
		$navbar = '<div class="navbar ' . $xsbf_theme_options['navbar_classes'] . '">'
			.'<div class="container">'
        	.'<div class="navbar-header">'
          	.'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">'
            .'<span class="icon-bar"></span>'
            .'<span class="icon-bar"></span>'
            .'<span class="icon-bar"></span>'
          	.'</button>';

		// Site title (Bootstrap "brand") in navbar. Hidden by default. Customizer will
		// display it if user turns off the main site title and tagline.
		$navbar .= '<a class="navbar-brand" href="'
			.esc_url( home_url( '/' ) )
			.'" rel="home">'
			.get_bloginfo( 'name' )
			.'</a>';
		
        $navbar .= '</div><!-- navbar-header -->';

		// Display the desktop navbar
		$navbar .= '<div class="navbar-collapse collapse">';
		$navbar .= wp_nav_menu( 
			array(  'theme_location' => 'primary',
			//'container_class' => 'navbar-collapse collapse', //<nav> or <div> class
			'menu_class' => 'nav navbar-nav', //<ul> class
			'walker' => new wp_bootstrap_navwalker(),
			'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			'echo'	=> false
			) 
		);
				
		echo apply_filters( 'xsbf_navbar', $navbar );
		?>

		</div><!-- .container -->
		</div><!-- .navbar -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content">
