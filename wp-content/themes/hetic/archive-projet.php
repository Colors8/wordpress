<?php get_header(); ?>

<!-- projects Content --> 
    <div class="row">

        <div class="span12 blog">

            <div class="row clearfix">
            <?php if (have_posts()) : ?>
                <ul class="blog-post-grid">
                    <!-- Blog Post 1 -->
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <?php
                            	$terms = get_the_terms( $post->ID, 'type');
                            	if ($terms && ! is_wp_error( $terms ) ):
                            		$subject_links = array();
                            		foreach ( $terms as $term ):
                            			$subject_links[] = $term->name;
                            		endforeach;
                            		$on_draught = join( ", ", $subject_links );
                            	endif;
                            ?>
                            <p><a href="<?php the_permalink();?>project-single.htm" class="clearfix">Titre projet</a>
                            <?php echo $on_draught; ?></p>

                            <?php 
                            	$dateformatstring = "d F Y";
                            	$unixtimestamp = strtotime(get_field('date_de_pulication')); 
                            ?>
                            <p>Date : <?php echo date_i18n($dateformatstring, $unixtimestamp); ?></p>

                        </div>
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('img_liste'); ?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div><!-- End Gallery Row -->        

<?php wp_footer(); ?>

