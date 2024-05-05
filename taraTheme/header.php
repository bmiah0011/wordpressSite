<html lang="en">
<head>
    <?php wp_head(); ?>
    <?php
$clothing_page_id = 207; //replace the id page with the one on the hosted site
$clothing_page_id_url = get_permalink($clothing_page_id);
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>

</head>
<body>

<div class="nav">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" onmouseover="toggleLogo(true)" onmouseout="toggleLogo(false)">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>" alt="Logo" id="logoImg">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logoBlack.png' ); ?>" alt="Black Logo" id="blackLogoImg">
  </a>

  <a href="#" class="top_menu" id="men_menu">Men</a>
  <ul class="mn_submenu">

  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-jacket', get_permalink($clothing_page_id) ) ); ?>">Jackets</a></li>
  </li><li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-hoodies', get_permalink($clothing_page_id) ) ); ?>">Hoodies</a>
  </li><li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-shirts', get_permalink($clothing_page_id) ) ); ?>">Shirts</a>
  </li><li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-jeans', get_permalink($clothing_page_id) ) ); ?>">Jeans</a>
  </li><li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-trousers', get_permalink($clothing_page_id) ) ); ?>">Trouser</a></li>
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'mens-joggers', get_permalink($clothing_page_id) ) ); ?>">Joggers</a></li>
  </ul>
 

  <a href="#" class="top_menu" id="women_menu">Women</a>
  <ul class="wmn_submenu">
    
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-jacket', get_permalink($clothing_page_id) ) ); ?>">Coats</a></li>
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-jumpers', get_permalink($clothing_page_id) ) ); ?>">Jumpers</a></li>
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-tops', get_permalink($clothing_page_id) ) ); ?>">Tops</a></li>
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-jeans', get_permalink($clothing_page_id) ) ); ?>">Jeans</a></li>
  <li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-trosuers', get_permalink($clothing_page_id) ) ); ?>">Trouser</a>
  </li><li><a href="<?php echo esc_url( add_query_arg( 'category', 'womens-leggings', get_permalink($clothing_page_id) ) ); ?>">Leggings</a></li>
  
</ul>

</div>


</header>


    

