<?php
function innovation_enqueue_style() {
     wp_enqueue_style("innovation-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "innovation_enqueue_style")
?>