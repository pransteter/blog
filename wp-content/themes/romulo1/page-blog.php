<?php get_header(); ?>

    <div class="conteudo-blog">

        <div class="banner-top">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/banners/blog.png">
        </div>

        <article class="recent-posts">
            <?php

                $arguments = array(
                    'category' => 3,
                    'numberposts' => 5,
                    'orderby' => 'post_date',
                    'post_type' => 'post'
                );
            ?>

            <div class="container-post container-verde">
                <a class="titulo-category-posts">Tutorial</a>
                <div class="box-posts">
                    <?php
                        $posts_tutorials = wp_get_recent_posts($arguments , OBJECT);

                        if (isset($posts_tutorials[0]) && is_object($posts_tutorials[0]))
                        {
                            foreach($posts_tutorials as $tutorial)
                            {
                                echo '<p class="excerpt">' . getExcerptOfObject($tutorial) . '</p>';
                                echo '<a href="'.site_url('').'/thoughts/'.$tutorial->post_name.'" class="link-see-more"> See more </a>';
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="container-post container-verde">
                <a class="titulo-category-posts">Thoughts</a>
                <div class="box-posts">
                    <?php
                        $arguments['category'] = 4;

                        $posts_thoughts = wp_get_recent_posts($arguments , OBJECT);

                        if (isset($posts_thoughts[0]) && is_object($posts_thoughts[0]))
                        {
                            foreach($posts_thoughts as $thought)
                            {
                                echo '<p class="excerpt">' . getExcerptOfObject($thought) . '</p>';
                                echo '<a href="'.site_url('').'/thoughts/'.$thought->post_name.'" class="link-see-more"> See more </a>';
                            }
                        }
                    ?>
                </div>
            </div>

        </article>

        <article class="recent-posts">

        </article>

    </div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bower-components/components/jquery/dist/jquery.min.js"></script>
<?php get_footer(); ?>