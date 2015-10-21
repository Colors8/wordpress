<?php get_header(); ?>
    
    <?php if (have_posts()) : ?>
        <!-- Si j'ai des posts, j'affiche cette partie -->
        <?php while (have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php
                the_post_thumbnail('article');
                the_content();
            ?>
        <?php endwhile; ?>
    <?php else : ?>
    <!-- Si il n'y a pas de post, j'affiche cette partie -->
        <p>Je n'ai rien à afficher.</p>
    <?php endif; ?>

<?php get_footer(); ?>