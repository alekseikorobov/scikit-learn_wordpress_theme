<?php
/*
 * Plugin Name: nbviewer
 * Description: view jupyter notebook from ipynb file
 */

function nbviewer_handler($atts) {
  //run function that actually does the work of the plugin
  $nb_output = nbviewer_function($atts);
  //send back text to replace shortcode in post
  return $nb_output;
}

function nbviewer_function($atts) {
  //process plugin
  extract(shortcode_atts(array(
        'url' => "",
     ), $atts));

  $clean_url = preg_replace('#^https?://#', '', rtrim($url,'/'));
  $html = file_get_contents("https://nbviewer.jupyter.org/url/" . $clean_url);
  $nb_output = nbviewer_getHTMLByID('notebook-container', $html);



  $converted_nb = '<div class="notebook">'.$nb_output.'</div>';

  //send back text to calling function
  return $converted_nb;
}

function nbviewer_innerHTML(DOMNode $elm) {
  $innerHTML = '';
  $children  = $elm->childNodes;

  foreach($children as $child) {
    $innerHTML .= $elm->ownerDocument->saveHTML($child);
  }

  return $innerHTML;
}

function nbviewer_getHTMLByID($id, $html) {
    $dom = new DOMDocument;
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    $node = $dom->getElementById($id);
    if ($node) {
        $inner_output = nbviewer_innerHTML($node);
        return $inner_output;
    }
    return FALSE;
}

function nbviewer_enqueue_style() {
  wp_enqueue_style( 'nbviewer', plugins_url( '/css/notebook.css', __FILE__ ));
  wp_enqueue_style( 'prism', plugins_url( '/css/prism.css', __FILE__ ));
}
add_action( 'wp_enqueue_scripts', 'nbviewer_enqueue_style' );
add_shortcode("nbviewer", "nbviewer_handler");
