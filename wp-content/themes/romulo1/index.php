<?php get_header(); ?>

<div class="conteudo-posts">

	<div id="slider-principal" class="flexslider flexslider-custom">
		<ul class="slides">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/slide/6.jpg" />
			</li>
			<li>
				<!--<img src="<?php /*echo get_template_directory_uri(); */?>/imgs/slide/2.jpg" />-->
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/slide/6.jpg" />
			</li>
			<li>
				<!--<img src="<?php /*echo get_template_directory_uri(); */?>/imgs/slide/3.jpg" />-->
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/slide/6.jpg" />
			</li>
			<li>
				<!--<img src="<?php /*echo get_template_directory_uri(); */?>/imgs/slide/3.jpg" />-->
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/slide/6.jpg" />
			</li>
		</ul>
	</div>

	<?php
	
		/*Linhas para listar posts da categoria "ultimas atualizações"
		$arguments = ['category' => 2];
		$posts = get_posts($arguments);
		echo "<pre>"; print_r($posts); echo "<hr>";exit;*/

	?>

    <article class="pagina-principal">

        <h2> Rômulo Pransteter </h2>
        <h3> Web Developer Full-Stack </h3>

		<div class="container-img-perfil">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/perfil1.jpg" alt="">
		</div>

		<div class="container-texto-perfil">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel mauris magna.
				Vestibulum imperdiet luctus maximus. Pellentesque ut tellus auctor lorem elementum
				scelerisque quis id purus. Quisque commodo et velit a euismod. Ut viverra mauris quis
				ligula ullamcorper blandit. Sed ante elit, elementum quis ultrices ut, feugiat a justo.
				Nunc justo enim, imperdiet eget aliquet sit amet, convallis a odio. Maecenas ultricies
				ultricies tortor, quis fringilla leo porttitor at. Praesent mollis et massa id elementum.
				Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				Quisque vulputate nulla non aliquam cursus. Morbi turpis augue, efficitur non nisl in,
				euismod sagittis eros. Vivamus dignissim justo vitae nibh dignissim malesuada.
				Etiam sed enim id est interdum mollis vel in arcu. Curabitur eleifend justo ante,
				in interdum massa venenatis sit amet. Mauris placerat blandit venenatis.
			</p>
		</div>


    </article>

</div>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bower-components/components/flexslider/flexslider.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bower-components/components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bower-components/components/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/index.js"></script>
<?php get_footer(); ?>