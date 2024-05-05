
<?php
$about_page_id = 1441;
$about_page_url = get_permalink($about_page_id);

$blog_page_id = 1451;
$blog_page_url = get_permalink($blog_page_id);

$brands_page_id = 1449;
$brands_page_url = get_permalink($brands_page_id);

$design_page_id = 1443;
$design_page_url = get_permalink($design_page_id);

$mission_page_id = 1447;
$mission_page_url = get_permalink($mission_page_id);

$pollution_page_id = 1445;
$pollution_page_url = get_permalink($pollution_page_id);

?>

<footer>

  <ul class="left">
    <li><a href="<?php echo esc_url($about_page_url); ?>">About</a></li>
    <li><a href="<?php echo esc_url($mission_page_url); ?>">Mission</a></li>
    <li><a href="<?php echo esc_url($brands_page_url); ?>">Brands</a></li>
  </ul>
  <ul class="right">
    <li><a href="<?php echo esc_url($design_page_url); ?>">Design Decision</a></li>
    <li><a href="<?php echo esc_url($pollution_page_url); ?>">Fashion Pollution</a></li>
    <li><a href="<?php echo esc_url($blog_page_url); ?>">Blog</a></li>
  </ul>

</footer>

<?php wp_footer(); ?>
</body>
</html>


