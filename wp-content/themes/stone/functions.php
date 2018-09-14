<?php





//menu

register_nav_menu('menu', 'Primary Menu');




//footer

register_sidebar(array(
  'name' => 'Footer',
  'id' => 'footer',
  'description' => 'Add footer from Widget Text',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => ''
));


//min img

add_theme_support('post-thumbnails');


//fashion-gallery
//
//
//function gallery($attr, $text = '')
//{
////  get array ID of img
//  $img_src = explode(',', $attr['ids']);
//
//  $result = '<ul id="slide_2" class="slidik">';
////  flag formation
//  $first_img = true;
//  foreach ($img_src as $item) {
////    get HTML images
//    $image_url = wp_get_attachment_image($item, 'full');
////  remove width/height
//    $image_url = preg_replace('#(width|height)=\"\d+\"#', "", $image_url);
////    formation conclusion images
//    if ($first_img) {
//      $result .= '<li class="show">' . $image_url . '</li>';
//      $first_img = false;
//    } else {
//      $result .= '<li>' . $image_url . '</li>';
//    }
//  }
//
//  //    formation of template residues
//  $result .= '<a data-slidik="slide_2" class="next" href="#">Next</a>
//            <a data-slidik="slide_2" class="prev" href="#">Prev</a>
//            <div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
//            <div class="portfolio-close"><a href="/category/portfolio/"></a></div>
//        </ul>';
//  echo $result;
//}

//
//add_shortcode('gallery', 'gallery');



function true_id($args){
  $args['post_page_id'] = 'ID';
  return $args;
}
function true_custom($column, $id){
  if($column === 'post_page_id'){
    echo $id;
  }
}

add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);

?>