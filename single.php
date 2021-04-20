<?php get_header(); ?>
<main id="content">
    <div class="container">
		<div class="filters">
            <p class="filter-name">edición</p>
            <p class="filter-name">año</p>
        </div>
        <span class=line></span>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php 
        $id = get_the_ID();
        $cats = get_the_category($id);
    	?>
        <div class="subcontainer">
			<div class="title">
                <a href="<?php echo get_permalink(); ?>" class="info"><?php the_title(); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="49.46" height="48.72" viewBox="0 0 49.46 48.72"><g transform="translate(0.503 18.645) rotate(-30)"><g transform="translate(0 0)"><path d="M36.205,17.324h0a.57.57,0,0,0,.042-.2h0a.57.57,0,0,0-.042-.2h0a.563.563,0,0,0-.125-.185L19.581.189a.566.566,0,0,0-.8.8L34.314,16.542H.566a.566.566,0,1,0,0,1.133H34.314L18.78,33.227a.566.566,0,1,0,.8.8l16.5-16.519A.563.563,0,0,0,36.205,17.324Z" transform="translate(0 -0.037)" fill="#f9868d" stroke="#f9868d" stroke-width="0.7"/></g></g></svg>
                </a>
                <p class="year"><?php echo $cats[0]->name; ?></p>
			</div>
			
			<div class="contenido-desplegable grid-container">
                <div class="grid-item pictures">
					<div id="pictures-carousel" class="owl-carousel owl-theme">
					<?php
					if( class_exists('Dynamic_Featured_Image') ) {
     					global $dynamic_featured_image;
     					$featured_images = $dynamic_featured_image->get_featured_images( $postId );

						foreach ($featured_images as $key => $featured_image) {
                            echo '<div class="picture-item">';
                            echo '  <div class="picture-img">';
                            echo '      <img src="'.$featured_image["full"].'" alt="'.$featured_image["attachment_id"].'">';
                            echo '  </div>';
                            echo '</div>';
                        }
 					}
					?>
					</div>
                </div>
                <div class="grid-item description">
                    <?php the_content(); ?>
                </div>



            </div>
		</div>
		<?php endwhile; endif; ?>
		
		<span class=line></span>
	</div>
</main>		

<?php wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/js/owl.carousel/owl.carousel.min.js', array('jquery'), FALSE, FALSE); ?>
<?php wp_enqueue_style( 'owl_carousel_style', get_template_directory_uri() . '/js/owl.carousel/assets/owl.carousel.min.css', FALSE, FALSE, FALSE); ?>
<?php wp_enqueue_style( 'owl_carousel_theme', get_template_directory_uri() . '/js/owl.carousel/assets/owl.theme.default.min.css', FALSE, FALSE, FALSE); ?>
<?php wp_enqueue_script('single', get_template_directory_uri() . '/js/single.js', array('jquery'), FALSE, FALSE); ?>
<?php get_footer(); ?>