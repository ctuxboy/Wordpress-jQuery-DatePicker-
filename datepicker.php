<?php
// inline script via wp_print_scripts
function wkbe_hook_javascript() {
	
?>
<script>
(function($){
jQuery(document).ready(function($) { 
$(".leverdatum").datepicker(); // link datepicker to input field with 'leverdatum' class
$('.leverdatum').attr('readonly', true); // make input field readonly
});

})(jQuery);
</script>
	
<?php	
}
add_action('wp_footer', 'wkbe_hook_javascript');

function wkbe_enqueue_datepicker() {
  // Load the datepicker script (pre-registered in WordPress).
  wp_enqueue_script( 'jquery-ui-datepicker' );

  wp_enqueue_style('jquery-ui', 'https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css', array() );
}
add_action( 'wp_enqueue_scripts', 'wkbe_enqueue_datepicker' );
?>
