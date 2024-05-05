<?php
// woops, replace the $ with £
function replace_currency_symbol($price) {
    // $ with £
    return str_replace('$', '£', $price);
}

get_header();

while (have_posts()) {
    the_post();
?>

<div class="post-page-entry-content">
    <div class="post-page-content-text">
        <?php the_content(); ?>
    </div>
    <div class="post-page-text-container">
        <h2 class="post-page-title"><?php the_title(); ?></h2>
        <div class="post-page-post-metadata">        <p><strong>Price:</strong> <?php echo replace_currency_symbol(get_post_meta(get_the_ID(), 'price', true)); ?></p>
            <p><strong>Brand:</strong> <?php echo get_post_meta(get_the_ID(), 'brand', true); ?></p>
      <p><strong>Colour:</strong> 
                <select class="color-select">
                <option value="current">Current</option>
              <option value="red">Red</option>            <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>
     </p>

            <p><strong>Size:</strong> 
         <select class="custom-select" style="margin-left: 21px;">
                    <option value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'size', true)); ?>">
                <?php echo esc_html(get_post_meta(get_the_ID(), 'size', true)); ?>
              </option>
                </select>
   </p>
     <button class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>
</div>


<?php
}
get_footer();
?>
