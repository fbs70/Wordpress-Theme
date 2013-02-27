<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('|'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >
</head>

<body>

	<header role="banner">
		<h1><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></h1>
		<nav>
			<ul role="navigation">
				<?php wp_nav_menu( array('menu'=>'Main Nav') ); ?>
			</ul>
		</nav> 
    </header>

    <section>
    	<div>
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
			</article>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no post match your criteria.'); ?>
			<?php endif; ?>
		</div>
	</section>

	<footer role="contentinfo">
		<ul>
			<li><a href="">Footer Link 1</a></li>
			<li><a href="">Footer Link 2</a></li>
			<li><a href="">Footer Link 3</a></li>
		</ul>
	</footer>
</body>
</html>
