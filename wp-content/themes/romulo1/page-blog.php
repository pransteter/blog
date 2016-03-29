<?php get_header(); ?>

    <div class="conteudo-posts">

        <article class="recent-posts">
            <?php

                $arguments = array(
                    'category' => 3,
                    'numberposts' => 5,
                    'orderby' => 'post_date',
                    'post_type' => 'post'
                );

                //globals $post;

                $posts_tutorials = wp_get_recent_posts($arguments , OBJECT);

                if (isset($posts_tutorials[0]) && is_object($posts_tutorials[0]))
                {
                    foreach($posts_tutorials as $tutorial)
                    {
                        
                    }
                }

                /*echo "<pre>"; print_r($posts_tutorials); echo "<hr>";*/exit;

            ?>
        </article>

        <article class="recent-posts">

        </article>

    </div>

<?php get_footer(); ?>