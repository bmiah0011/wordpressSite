<?php
// check worpdress is loaded
if (!function_exists('add_action')) {
    require_once('../../wp-load.php');
}

//load file name
$file_name = 'posts.csv';

//import posts from a CSV file
function import_posts() {
    global $file_name; //variable name to $file_name

    $file_path = dirname(__FILE__) . '/' . $file_name; // Get the directory of the current script

    if (file_exists($file_path)) {
        //open file for reading
        $file = fopen($file_path, 'r');

        while (($data = fgetcsv($file)) !== false) {
            list($title, $category, $image_url, $size, $brand, $price) = $data;

            $title = trim($title);
            $category = trim($category);
            $image_url = trim($image_url);
            $size = trim($size);
            $brand = trim($brand);
            $price = trim($price);

            //if a post with the same title already posted
            $existing_post = get_page_by_title($title, OBJECT, 'post');

            if (!$existing_post) {
                //posting the post
                $post_data = array(
                    'post_title'    => $title,
                    'post_content'  => '<img src="' . $image_url . '" alt="woops, not here">',
                    'post_status'   => 'publish',
                );

                //putting post in database
                $post_id = wp_insert_post($post_data);

                if ($post_id) {
                    //setting post categories
                    $category_id = get_cat_ID($category);
                    wp_set_post_categories($post_id, array($category_id));

                    //meta data for prices and size and brand
                    add_post_meta($post_id, 'size', $size);
                    add_post_meta($post_id, 'brand', $brand);
                    add_post_meta($post_id, 'price', $price);

                    echo "Post created successfully. Post ID: $post_id<br>";
                } else {
                    echo "Failed to create post.<br>";
                }
            } else {
                echo "Post with title '$title' already exists. Skipping creation.<br>";
            }
        }

        //closing th efile
        fclose($file);
    } else {
        echo "File not found.";
    }
}

//calling function for positng the post
import_posts();
?>
