<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienal de Artes Mediales de Santiago</title>
    <link rel="stylesheet" href="page-style.css">

</head>

<body>
    <div class="navigation">
        <p class="year-left">1999</p>
        <p class="year-right">2000</p>
    </div>

    <section class="webmockup">
        <img class="website" src="images/12-web@2x.jpg" alt="">
        <a href="sitio web: 14.bienaldeartesmediaes.cl" class="website-link">sitio web: 14.bienaldeartesmediaes.cl</a>
    </section>

    <section class="color-section">
        <div class="post-container">
            <div class="title">
                <h2>14ª El cuarto mundo</h2>
                <h3>2019</h3>
            </div>

            <div class="flex-grid">
                <div class="main-image">
                    <img src="https://14.bienaldeartesmediales.cl/wp-content/themes/14th-bam-theme/assets/mainPrograms.gif" alt="">
                </div>
                <div class="curatorial-text">
                    <p>La convergencia entre artes, ciencias y tecnología, entre naturaleza, ciudad, ideas, palabras y acción colectiva, conforma el campo de exploraciones de El cuarto mundo, la 14 Bienal de Artes Mediales de Santiago. Buscamos desenvolver
                        estrategias de adaptación y transformación ante un presente determinado por la integración de tecnologías digitales en buena parte de los procesos sociales, la infoxicación producida por la saturación mediática y la sobreexplotación
                        de la naturaleza, hoy reducida a recursos y servicios. Combinando las lógicas de la intuición, la creación, la precisión, el archivo y la conexión, queremos generar instrumentos de múltiples escalas y perspectivas con los que explorar
                        la crisis e imaginar modos de adaptación y balance para trazar el camino de vuelta a la tierra.</p>
                </div>
                <div class="book-mockup">
                    <img src="https://www.bienaldeartesmediales.cl/wp-content/uploads/2021/02/14-catalogo-mockup@2x.jpg" alt="">
                </div>
                <div class="book-info">

                    <div>
                        <h4>Catálogo 14ª Bienal</h4>
                        <p>Número de páginas: 345 pp</p>
                        <p>Descarga: <a href="#">No disponible</a></p>
                        <p>Lectura online: <a href="#">No disponible</a></p>
                    </div>


                </div>
            </div>




        </div>


    </section>

</body>

</html>








<?php get_header(); ?>
<main id="content" class="single">
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php 
        $id = get_the_ID();
        $cats = get_the_category($id);
    	?>
        <div class="subcontainer">
            <div class="title-single">
                <a href="<?php echo get_post_meta($id, '_wpbienal_extra_link', true); ?>" class="info">
                    <?php the_title(); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="49.46" height="48.72" viewBox="0 0 49.46 48.72"><g transform="translate(0.503 18.645) rotate(-30)"><g transform="translate(0 0)"><path d="M36.205,17.324h0a.57.57,0,0,0,.042-.2h0a.57.57,0,0,0-.042-.2h0a.563.563,0,0,0-.125-.185L19.581.189a.566.566,0,0,0-.8.8L34.314,16.542H.566a.566.566,0,1,0,0,1.133H34.314L18.78,33.227a.566.566,0,1,0,.8.8l16.5-16.519A.563.563,0,0,0,36.205,17.324Z" transform="translate(0 -0.037)" fill="#f9868d" stroke="#f9868d" stroke-width="0.7"/></g></g></svg>
                </a>
                <!--  <p class="year"><?php echo $cats[0]->name; ?></p> -->
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
            <div class="download">
                <a href="<?php echo get_post_meta($id, '_wpbienal_extra_catalog', true); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.797" height="19.855" viewBox="0 0 18.797 19.855"><g transform="translate(18.412 0.35) rotate(90)"><g transform="translate(0 0)"><path d="M19.133,9.173h0a.3.3,0,0,0,.022-.108h0a.3.3,0,0,0-.022-.108h0a.3.3,0,0,0-.066-.1L10.348.118a.3.3,0,0,0-.423.423L18.134,8.76H.3a.3.3,0,1,0,0,.6H18.134L9.925,17.577a.3.3,0,1,0,.423.423l8.72-8.73A.3.3,0,0,0,19.133,9.173Z" transform="translate(0 -0.037)" fill="none" stroke="#f9868d" stroke-width="0.7"/></g></g></svg>                    descargar catálogo</a>
            </div>
            <div class="line"></div>
            <div class="single-nav">
                <?php
				echo '<div class="next">';
				$prev_post = get_adjacent_post(false, '', true);
				if(!empty($prev_post)) {
					$prev_cats = get_the_category($prev_post->ID);
					echo '
					<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '" class="prev-btn">
					<p class="year">
					<svg xmlns="http://www.w3.org/2000/svg" width="37.937" height="35.86" viewBox="0 0 37.937 35.86">
  <g id="Layer_2" data-name="Layer 2" transform="translate(37.587 35.459) rotate(180)">
    <g id="Group_1" data-name="Group 1" transform="translate(0 0)">
      <path id="Path_1" data-name="Path 1" d="M37.194,17.8h0a.586.586,0,0,0,.043-.209h0a.586.586,0,0,0-.043-.209h0a.578.578,0,0,0-.128-.19L20.116.194a.582.582,0,0,0-.822.822L35.251,16.993H.582a.582.582,0,1,0,0,1.164H35.251L19.293,34.133a.582.582,0,1,0,.822.822l16.951-16.97A.578.578,0,0,0,37.194,17.8Z" transform="translate(0 -0.037)" fill="#f9868d" stroke="#f9868d" stroke-width="0.7"/>
    </g>
  </g>
</svg>
					'.$prev_cats[0]->name.'
					</p>
					</a>';
				}
				echo '</div>';
				
				echo '<div class="return"><a href="/" title="volver" class="return-btn"><p class="year">volver</p></a></div>';
				
				echo '<div class="next">';
				$next_post = get_adjacent_post(false, '', false);
				if(!empty($next_post)) {
					$next_cats = get_the_category($next_post->ID);
					echo '
					<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '" class="next-btn">
					<p class="year">
					'.$next_cats[0]->name.'
					<svg xmlns="http://www.w3.org/2000/svg" width="37.937" height="35.86" viewBox="0 0 37.937 35.86">
  <g id="Layer_2" data-name="Layer 2" transform="translate(0.35 0.401)">
    <g id="Group_1" data-name="Group 1" transform="translate(0 0)">
      <path id="Path_1" data-name="Path 1" d="M37.194,17.8h0a.586.586,0,0,0,.043-.209h0a.586.586,0,0,0-.043-.209h0a.578.578,0,0,0-.128-.19L20.116.194a.582.582,0,0,0-.822.822L35.251,16.993H.582a.582.582,0,1,0,0,1.164H35.251L19.293,34.133a.582.582,0,1,0,.822.822l16.951-16.97A.578.578,0,0,0,37.194,17.8Z" transform="translate(0 -0.037)" fill="#f9868d" stroke="#f9868d" stroke-width="0.7"/>
    </g>
  </g>
</svg>
					</p>
					</a>';
				}
				echo '</div>';
				?>
            </div>
        </div>
        <?php endwhile; endif; ?>

        <!-- <span class=line></span> -->
    </div>
</main>

<?php wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/js/owl.carousel/owl.carousel.min.js', array('jquery'), FALSE, FALSE); ?>
<?php wp_enqueue_style( 'owl_carousel_style', get_template_directory_uri() . '/js/owl.carousel/assets/owl.carousel.min.css', FALSE, FALSE, FALSE); ?>
<?php wp_enqueue_style( 'owl_carousel_theme', get_template_directory_uri() . '/js/owl.carousel/assets/owl.theme.default.min.css', FALSE, FALSE, FALSE); ?>
<?php wp_enqueue_script('single', get_template_directory_uri() . '/js/single.js', array('jquery'), FALSE, FALSE); ?>
<?php get_footer(); ?>