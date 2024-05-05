<?php
get_header();
?>


<main id="main" class="site-main">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header --> 

                <div class="entry-content">
                    <?php
                    // Display post content
                    the_content();
                    ?>
                </div><!-- .entry-content -->


            </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        endwhile;
    else :
        // If no content, display a message
        echo 'Sorry, no posts found.';
    endif;
    ?>

</main><!-- #main -->




<?php
get_footer();
?>
