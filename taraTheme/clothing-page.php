<?php
/*
 * Template Name: clothing page
 */
get_header(); 

$category_slug = isset($_GET['category']) ? $_GET['category'] : '';

$args = array(
    'post_type' => 'post', 
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'category_name' => $category_slug, 
);

$query = new WP_Query($args);
?>

<div class="post-container">
    <?php
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); 
    ?>
            <div class="post-wrapper">
                <div class="post-content">
                    <?php 
                    // get the post content
                    $content = get_the_content();
                    
                    // match image tags in content
                    preg_match_all('/<img[^>]+>/i', $content, $matches);
                    
                    //loop throguh image tag
                    foreach($matches[0] as $image_tag) {
                        // display image tag
                        echo $image_tag . "<br>";
                    }
                    ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                
                <div class="read-more">
                    <a href="<?php the_permalink(); ?>">Check &raquo;</a>

                </div>
            </div>
    <?php
        } //endign the loop
        wp_reset_postdata();
    } else {
        echo 'no posts found.';
    }
    ?>
</div>

<?php
get_footer();
?>


